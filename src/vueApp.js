//application using view to generate the main display data for the statistics page

//TODO: add data and methods as necessary, but let the template written straight into the php html handle things

Vue.createApp({
    data() {
      return {
        introText: 'Hello Vue!',
        explaText: "Here is the explanation.",
        graphData: {
            x: [0,1,2,3,4,5],
            y: [0,1,2,3,4,5],
            mode: "lines",
            type: "scatter",
        },
        graphLayout : {
            title: "Test",
            xaxis: {range: [0,6], title:"X-Axis"},
            yaxis: {range: [0,6], title:"Y-Axis"},
        }
      }
    },

    methods: {
        changeText() {
            this.introText = "A new message."
        },

        //TODO: create method that handles the plotly graph generation using the dummy data
        plotGraph() {
            let graphElement = document.getElementById("graph");
            Plotly.newPlot(graphElement, this.graphData, this.graphLayout);
        }

        //TODO: create a method to read in the desired current graph data
    }
  }).mount('#app')