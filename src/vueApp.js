//application using view to generate the main display data for the statistics page

Vue.createApp({
    data() {
        return {
            originalQ: ["Here will be the original question"],
            explaText: ["Here is the explanation of the graph."],
            graphIndex: 0,
            graphData: [{
                x: [0, 1, 2, 3, 4, 5],
                y: [0, 1, 2, 3, 4, 5],
                mode: "points",
                type: "scatter",
            }],
            graphLayoutData: [{
                title: "Test",
                xaxis: { range: [0, 6], title: "X-Axis" },
                yaxis: { range: [0, 6], title: "Y-Axis" },
            }],

            inputData: JSON.parse(data),
        }
    },

    methods: {
        plotGraph() {
            Plotly.newPlot("graph", [this.graphData[this.graphIndex]], this.graphLayoutData[this.graphIndex]);
        },

        nextGraph() {
            //go to the next set of graph data and layout data
            this.graphIndex++;
            if (this.graphIndex >= this.graphData.length) this.graphIndex = 0;

            //plot that new data
            this.plotGraph();
        },

        genAgeHistogram() {
            //x is age brackets, y is number of people in each bracket
            //brackets
            let brackets = ["0 to 9", "10 to 19", "20 to 29", "30 to 39", "40 to 59", "60 to 79", "80+"];
            let bracketCutoffs = [9, 19, 29, 39, 59, 79, 122];

            //from the raw input data, fetch just the array of all ages
            let ages = [];
            this.inputData.forEach(survey => ages.push(parseInt(survey.age)));

            //calculate the population of each bracket using the cutoff values
            let bracketPopulations = this.calcBracketPops(ages, bracketCutoffs);

            //push original question text
            this.originalQ.push("What is your age?");

            //push explanation text
            this.explaText.push("This is a histogram of the ages of those who've taken the survey. The brackets are as they are over each decade of life except for the latter two, which show condensed brackets for practicality and the low number of online users at that age. Although I'm sure in the years to come that will naturally change.");

            //put new graph data in
            let [x, y, mode, type] = [brackets, bracketPopulations, "", "bar"];
            this.putNewGraphData(x, y, mode, type);

            //put new graph layout data in
            let [title, xaxisTitle, yaxisTitle] = ["Age Histogram", "Age Brackets", "Count"];
            this.putNewLayoutData(title, xaxisTitle, yaxisTitle);
        },

        putNewGraphData(x, y, mode, type) {
            this.graphData.push({
                x: x,
                y: y,
                mode: mode,
                type: type
            });
        },

        putNewLayoutData(title, xaxisTitle, yaxisTitle) {
            this.graphLayoutData.push({
                title: title,
                xaxis: { title: xaxisTitle },
                yaxis: { title: yaxisTitle },
            })
        },

        calcBracketPops(ageData, bracketCutoffs) {
            //calculate population of each age bracket using its cutoff, returning the correct array of data

            //due to modification, a new array is made to prevent mutating the orignal array
            let data = [...ageData];

            let bracketPops = [];
            bracketCutoffs.forEach(cutoff => {
                //for each cut off, go through the data array and count valid ages and slice them out, so they dont get double counted
                let count = 0;

                //due to splicing down the array we iterate backwards through it
                for (i = data.length; i >= 0; i--) {
                    if (data[i] < cutoff) {
                        count++;
                        data.splice(i, 1);
                    }
                }

                bracketPops.push(count);
            });

            return bracketPops;
        },

        generateGraphs() {
            //each generate method puts a new graph object in the graphData and a corresponding layout in graphLayoutData
            //generate age range histogram data
            this.genAgeHistogram();

            //generate gender pie chart data

            //generate country pie chart data

            //generate class bar graph with pure vs multiclass split
        }
    },

    mounted() {
        //TODO: the following boot up functions
        console.log(this.inputData);

        //generate graph data
        this.generateGraphs();

        //plot the initial graph
        this.plotGraph();
    }
}).mount('#app');