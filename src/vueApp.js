//application using view to generate the main display data for the statistics page

//TODO: add data and methods as necessary, but let the template written straight into the php html handle things

Vue.createApp({
    data() {
      return {
        introText: 'Hello Vue!',
        explaText: "Here is the explanation.",
        graphData: {
            title: "TItle",
            xTitle: "X bar",
            yTitle: "Y bar",
            x: [0,1,2,3,4,5],
            y: [0,1,2,3,4,5],
        }
      }
    },

    methods: {
        changeText() {
            this.introText = "A new message."
        }

        //TODO: create method that handles the plotly graph generation using the dummy data

        //TODO: create a method to read in the desired current graph data
    }
  }).mount('#app')