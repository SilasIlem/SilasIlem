<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 py-6">
                <div class="card">

                    <div class="card-header">SET {{no}}</div>

                    <div class="card-body">

                        <img id = spin :src = "source + 'images/compact-disc-solid.svg'" style="width: 50px; height : 50px; color:blue" />
                        
                        <button v-if = "no != 1" type="button" id="close">X</button>
                        
                        <div>
                        
                            <label for="class-category">Select Class & Exam Types:<span style="color:red">*</span></label>
                            
                            <br />

                            <select id = "class-category" v-on:change = "spinForSubjects(source);" name="class-category">
                                <option value="not">--Please choose an option--</option>
                                <option value="bece">BECE, Junior Secondary</option>
                                <option value="waec">WAEC, Senior Secondary</option>
                                <option value="jamb">JAMB</option>
                                <option value="neco">NECO</option>
                            </select>
                        </div>

                        <br />
                        <br />
        
                        <div id = 'selection'>
                            <div>                            
                                <label for="subject-category">Select Subject: <span style="color:red">*</span></label>
                                
                                <br />

                                <select v-on:change = "spinForTopics(source)" name="subject-category" id="subject-category">
                                    <option value="not">--Please choose a subject--</option>
                                </select>
                            </div>
                        
                                <br />
                                <br />

                            <div>
                                <div>
                                    <label for="topic-category">Select Topic: <span style="color:red">*</span></label>
                                    
                                    <br />

                                    <select name="topic-category" id="topic-category">
                                        <option value="">--Please choose a topic--</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                            <br />
                            <br />

                        <div class="row form-group" id="subtopicDiv5" style="display: none;">
                           
                                <label for="subtopics5">Select Subtopic: <span style="color:red">*</span></label><br>
                                <select name="subtopics5" id="subtopics5" class="form-control">
                                    <option value="">--Please choose a subtopic--</option>
                                </select>
                          
                        </div>

                        <div class="row form-group" id="topicloader5" style="display: none;">
                            <div class="offset-md-4 col-md-4"><i class="fas fa-spinner fa-spin" style="font-size: 30px; color:blue"></i></div>
                        </div>

                        <div class="row form-group">
                            <div class="container">
                                <label for="subtopic2">Number of questions: <span style="color:red">*</span></label><br>
                                <input type="number" min="0" max="10" class="form-control" id="count5" name="count5" />
                                <p class="text text-danger" id="counterror5">Number should be between 1 and 10</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .card-header {
        height : 70px;
        font-size : 30px;
        padding-top : 10px;
        color : blue;
    }

    .card-body {
        min-height : 50vh;
        display : flex;
        justify-content : space-around;
        flex-direction : column;
        align-items : center;
    }

    #spin {
        animation : spin 2s linear infinite;
        display : none;
    }

    #selection {
        display : none;
    }

    @keyframes spin {
        to {
            transform : rotate(360deg);
        }
    }

    #close {
        cursor: pointer;
        border: none;
        height: 30px;
        width: 30px;
        border-radius: 50%;
        box-shadow: 0px 1px 4px 1px #4e73df;
        color: red;
        float: right;
        background-color: transparent;
    }
</style>

<script>
import axios from 'axios';
Vue.prototype.$http = axios;

export default {
    data : () => {
        return {
            one : 'I am the one.'
        }
    },
    props : {
        no : Number,
        source : String
    },
    mounted() {
        console.log("Component mounted.");
    },
    methods: {
        async spinForSubjects(source) {
            var spinner = document.getElementById('spin');
            var classer = document.getElementById('class-category');
            var subjects = document.getElementById('subject-category');
            source = `${source}json/subjects/${classer.value}.json`;
            if (classer.value != 'not') {
                spinner.style.display = 'block';
                try {
                    const response = await this.$http.get(
                        source
                    );
                    this.subjects = response.data;
                    spinner.style.display = "none";
                    console.log(this.subjects);
                    subjects.innerHTML = `
                    <option value="not">--Please choose a subject--</option>`;
                    this.subjects.forEach(subject => {
                        subjects.innerHTML += `
                                            <option value="${subject.value}">${subject.name}</option>`;
                    });
                    document.getElementById('selection').style.display = "block";
                    
                } 
                
                catch (error) {
                    console.log(error);
                }
            }
            
        },

        async spinForTopics(source) {
            var spinner = document.getElementById('spin');
            var subber = document.getElementById('subject-category');
            var toppick = document.getElementById('topic-category');
            source = `${source}json/topics/${subber.value}.json`;
            if (subber.value != 'not') {
                spinner.style.display = 'block';
                try {
                    const response = await this.$http.get(
                        source
                    );
                    this.topics = response.data;
                    spinner.style.display = "none";
                    console.log(this.topics);
                    toppick.innerHTML = '';
                    this.topics.forEach(topic => {
                        toppick.innerHTML += `
                                            <option value="${topic.value}">${topic.name}</option>`;
                    });
                    
                } 
                
                catch (error) {
                    console.log(error);
                }
            }
            
        }
    }      
};
</script>


