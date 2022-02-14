console.log("hello Im in src/survey.js");

function App() {
    function Question(props) {
        //this is one questoin; a pair of a form of the appropriate type and content/s and a paired submit button
        //for questions with multiple options the props.content is an array of those options
        //otherwise its the defualt submit value. Error checking within subcomponents for more clear error messages

        if (props.type == "CheckBoxQ") return (<CheckBoxQ content={props.content} question={props.question}></CheckBoxQ>);
        if (props.type == "RadioQ") return (<RadioQ content={props.content} question={props.question}></RadioQ>);
        // if (props.type == "NumericQ") return (<NumericQ content={props.content}></NumericQ>);
        // if (props.type == "Date") return (<Date content={props.content}></Date>);
        else return <p>Error: Bad Question</p>;

        return null;
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
                            <label htmlFor={"question-" + index} key={"label-key_" + index}>Question: {value}</label>
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
                        <label htmlFor={"radio-q-" + index} key={"label-key_" + index}>Label for: {value}</label>
                    </div>)
                })
            }
        </form>)
    }

    //top level App HTML
    //fun fact, putting the ( below on a new line breaks React
    return (
    <div>
        <h1>Visitor Survey</h1>
        <p>This is a short demonstration of React being used to build a survey paged.</p>
        <p>Be sure to check out the results page <a href="#">here</a> to see the data so far.</p>
        <hr /><br/>
        <Question type="CheckBoxQ" question="Is this the first question?" content={["This", "is", "an", "example"]}></Question><br/>
        <Question type="CheckBoxQ" content={3}></Question><br/>
        <Question type="RadioQ" question="And might this be the second?" content={["This", "is", "also", "an", "example"]}></Question><br/>
    </div>)
}

let app = <App />;
ReactDOM.render(app, document.getElementById("survey-app"));
