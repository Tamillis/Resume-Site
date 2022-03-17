//application using view to generate the main display data for the statistics page

//TODO: add data and methods as necessary, but let the template written straight into the php html handle things

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
            //TODO: set up fixed data that isnt extracted: title, type, layout information
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

        //TODO: create a method to read in the desired current graph data
        loadData() {

        }
    },

    mounted() {
        this.plotGraph();
    }
}).mount('#app');

//TODO: fetch functions require async/await so shove loadData() here
async function loadData() {
    //await fetch();
}