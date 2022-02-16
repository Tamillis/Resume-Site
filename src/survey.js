function App() {
    function Question(props) {
        //this is one question; a label and input element pair
        //for questions with multiple options the props.content is an array of those options
        //otherwise its the defualt submit value. Error checking within subcomponents for more clear error messages

        if (props.type == "Text") return (<TextInput content={props.content} question={props.question} name={props.name}></TextInput>)
        if (props.type == "CheckBoxQ") return (<CheckBoxQ content={props.content} question={props.question}></CheckBoxQ>);
        if (props.type == "RadioQ") return (<RadioQ content={props.content} question={props.question}></RadioQ>);
        // if (props.type == "NumericQ") return (<NumericQ content={props.content}></NumericQ>);
        // if (props.type == "SelectBoxQ") return (<SelectBoxQ content={props.content}></SelectBoxQ>);
        else return <p>Error: Bad Question</p>;
    }

    function TextInput(props) {
        if(Array.isArray(props.content)) return <p>Error; content is an array.</p>;
        return (
            <div>
                <label htmlFor={props.name}>{props.question}</label><br/>
                <input type="text" id={props.name} name={props.name} value={props.content}/>
            </div>
        );
    }

    function CheckBoxQ(props) {
        //check content is an array object
        if (!Array.isArray(props.content)) return <p>Error; Bad content for CheckBoxQ</p>;

        //return the form
        return (
            <form>
                <p>{props.question}</p>
                {
                    //each checkbox question most likely has more than one box to check, so map the content array out
                    //and format each label according to the props.content content
                    props.content.map((value, index) => {
                        return (<div>
                            <input type="checkbox" id={"question-" + index} key={"check-key_" + index} name="checkBox1" value={value} />
                            <label htmlFor={"question-" + index} key={"label-key_" + index}>{value}</label>
                        </div>)
                    })
                }
            </form>
        );
    }
    function RadioQ(props) {
        if (!Array.isArray(props.content)) return <p>Radio question has bad content</p>;
        return (<form>
            <p>{props.question}</p>
            {
                props.content.map((value, index) => {
                    return (<div>
                        <input type="radio" id={"radio-q-" + index} key={"radio-key_" + index} name="radioQ1" value={value} />
                        <label htmlFor={"radio-q-" + index} key={"label-key_" + index}>{value}</label>
                    </div>)
                })
            }
        </form>)
    }

    function handleSubmit() {
        alert("Submitted");
    }

    //top level App HTML
    //fun fact, putting the ( below on a new line breaks React
    return (
    <div>
        <h1>Visitor Survey</h1>
        <p>This is a short demonstration of React being used to build a survey paged.</p>
        <p>Be sure to check out the results page <a href="#">here</a> to see the data so far.</p>
        <hr /><br/>
        <Question type="Text" question ="What's your online name?" name="handle" content="Harry"></Question>
        <Question type="CheckBoxQ" question="Which D&D class (or multi-class) are you?" content={["Barbarian", "Bard", "Cleric", "Druid", "Fighter", "Paladin", "Monk", "Rogue", "Ranger", "Sorcerer", "Wizard", "Warlock"]}></Question><br/>
        <Question type="RadioQ" question="What's your gender?" content={["Male", "Female", "Other", "I'd rather not say"]}></Question><br/>
        <input type="submit" onSubmit={handleSubmit} value="Submit Survey"/>
    </div>)
}

let app = <App />;
ReactDOM.render(app, document.getElementById("survey-app"));
