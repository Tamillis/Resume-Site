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
            //TODO: handle input data, which is just an array of objects of all the data from the table, into data appropriate for a plotly graph
            inputData: data,
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
    },

    mounted() {
        this.plotGraph();
    }
}).mount('#app');