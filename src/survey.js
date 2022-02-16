//put the app in a closure to prevent any global scope shenanigans
const surveyApp = () => {

    let countriesArray = [];

    async function loadCountryData() {
        countriesArray = await fetch("assets/countries.json").then(res => res.json());
        console.log(countriesArray[69]);
    }

    function App() {
        // const [data, setData] = React.useState([]);

        function Question(props) {
            //this is one question; a label and input element pair
            //for questions with multiple options the props.content is an array of those options
            //otherwise its the defualt submit value. Error checking within subcomponents for more clear error messages

            if (props.type == "Text") return (<TextInput content={props.content} question={props.question} name={props.name}></TextInput>)
            if (props.type == "CheckBoxQ") return (<CheckBoxQ content={props.content} question={props.question}></CheckBoxQ>);
            if (props.type == "RadioQ") return (<RadioQ content={props.content} question={props.question}></RadioQ>);
            // if (props.type == "NumericQ") return (<NumericQ content={props.content}></NumericQ>);
            if (props.type == "SelectBoxQ") return (<SelectBoxQ question={props.question} name={props.name}></SelectBoxQ>);
            else return <p>Error: Bad Question</p>;
        }

        function TextInput(props) {
            if (Array.isArray(props.content)) return <p>Error; content is an array.</p>;
            return (
                <div>
                    <label htmlFor={props.name}>{props.question}</label><br />
                    <input type="text" id={props.name} name={props.name} defaultValue={props.content} />
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
                                <label htmlFor={"question-" + index} key={"check-label-key_" + index}>{value}</label>
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
                            <label htmlFor={"radio-q-" + index} key={"radio-label-key_" + index}>{value}</label>
                        </div>)
                    })
                }
            </form>)
        }

        function SelectBoxQ(props) {
            let selectOptions = countriesArray.map((country, index) => {
                return (<option value={country} key={index}>{country}</option>)
            });
            //console.log(selectOptions);
            return (
                <div>
                    <label htmlFor={props.name}>{props.question}</label>
                    <select name={props.name} id={props.name}>{selectOptions}</select>
                </div>
            )
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
                <hr /><br />
                <Question type="Text" question="What's your online name?" name="handle" content="Harry"></Question>
                <Question type="SelectBoxQ" question="What country are you from?" name="country"></Question>
                <Question type="CheckBoxQ" question="Which D&D class (or multi-class) are you?" content={["Barbarian", "Bard", "Cleric", "Druid", "Fighter", "Paladin", "Monk", "Rogue", "Ranger", "Sorcerer", "Wizard", "Warlock"]}></Question><br />
                <Question type="RadioQ" question="What's your gender?" content={["Male", "Female", "Other", "I'd rather not say"]}></Question><br />
                <input type="submit" onSubmit={handleSubmit} value="Submit Survey" />
            </div>)
    }

    async function run() {
        //first preload, which has async await stuff, so gotta wrap this whole thing in an async function first
        await loadCountryData();

        //then build the react app
        let app = <App />;
        ReactDOM.render(app, document.getElementById("survey-app"));
    }

    //actually run the code
    run();
}

//call the closure
surveyApp();