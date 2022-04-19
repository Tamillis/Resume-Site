//application using view to generate the main display data for the statistics page

Vue.createApp({
    data() {
        return {
            introText: 'Here will be the original question',
            explaText: "Here is the explanation of the graph.",
            graphDataIndex: 0,
            graphData: [{
                x: [0, 1, 2, 3, 4, 5],
                y: [0, 1, 2, 3, 4, 5],
                mode: "points",
                type: "scatter",
            }, {
                x: [2, 2, 2, 2, 2, 2],
                y: [0, 1, 2, 3, 4, 5],
                mode: "points",
                type: "scatter"
            }, {
                x: [0, 1, 2, 3, 4, 5],
                y: [2, 2, 2, 2, 2, 2],
                mode: "points",
                type: "scatter"
            }],
            graphLayout: {
                title: "Test",
                xaxis: { range: [0, 6], title: "X-Axis" },
                yaxis: { range: [0, 6], title: "Y-Axis" },
            },

            inputData: JSON.parse(data),
        }
    },

    methods: {
        plotGraph() {
            Plotly.newPlot("graph", [this.graphData[this.graphDataIndex]], this.graphLayout);
        },

        nextGraph() {
            this.graphDataIndex++;
            if (this.graphDataIndex >= this.graphData.length) this.graphDataIndex = 0;
            this.plotGraph();
        },

        genAgeHistogram(data) {
            //x is age brackets, y is number of people in each bracket
            //brackets
            let brackets = ["0 to 9", "10 to 19", "20 to 29", "30 to 39", "40 to 59", "60 to 79", "80+"];
            let bracketCutoffs = [9, 19, 29, 39, 59, 79, 122];

            //from the raw input data, fetch just the array of all ages
            let ages = [];
            data.forEach(survey => ages.push(parseInt(survey.age)));

            //calculate the population of each bracket using the cutoff values
            let bracketPopulations = this.calcBracketPops(ages, bracketCutoffs);
        },

        calcBracketPops(ageData, bracketCutoffs) {
            //calculate population of each age bracket using its cutoff, returning the correct array of data

            bracketCutoffs.forEach(cutoff => {
                //for each cut off, go through the data array and count valid ages and slice them out, so they dont get double counted
            });
        }
    },

    mounted() {
        //TODO: the following boot up functions

        //generate age range histogram data
        this.genAgeHistogram(this.inputData);

        //generate gender pie chart data

        //generate country pie chart data

        //generate class bar graph with pure vs multiclass split
        this.plotGraph();
    }
}).mount('#app');