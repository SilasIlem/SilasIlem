<template>
    <div class="container">
        <div id="independent">
            <button onclick = "document.getElementById('independent').style.display = 'none';">
                <i class = "bi bi-x"></i>
            </button>
        </div>
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

                            <div id = "top-selection">
                               
                                <label for="topic-category">Select Topic: <span style="color:red">*</span></label>
                                
                                <br />

                                <select v-on:change = "spinForSubtopics(source)" name="topic-category" id="topic-category">
                                    <option value="">--Please choose a topic--</option>
                                </select>
                               
                            </div>

                            <br />
                            <br />

                            <div id = "sub-selection">
                            
                                <label for="subtopic-category">Select Subtopic: <span style="color:red">*</span></label>
                                
                                <br />

                                <select v-on:change = "quest(source)" name="subtopic-category" id="subtopic-category">
                                    <option value="not">--Please choose a subtopic--</option>
                                </select>

                                <br />
                                <br />

                                <div id = "preview-btn-container">
                                    <button id = "preview" v-on:click = "preview()">Preview</button>
                                </div>
                            
                            </div>
                        </div>

                        <br />
                        <br />

                        <div id = "limiter">
                 
                                <label for="quest-limit">Number of questions: <span style="color:red">*</span></label>
                                
                                <br />

                                <input type="number" min="0" max="10" id="quest-limit" name="limit" />
                                <p class="text text-danger" id="counterror">Number should be between 1 and 10</p>
                         
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    #independent {
        min-height : 80vh;
        min-width : 90vw;
        left : 5vw;
        z-index : 99;
        max-width : 90vw;
        position : fixed;
        top : 10vh;
        max-height : 80vh;
        background : white;
        border-radius : 8px;
        display : none;
        box-shadow : 0px 0px 8px #eb2f2f;
    }

    #independent button {
        position : absolute;
        right : 8px;
        top : 8px;
        width : 50px;
        background : white;
        border-radius : 50%;
        box-shadow : 4px 4px 8px black;
        height : 50px;
        padding-top : 8px;
        font-size : 28px;
        text-align : center;
    }

    #independent button i {
        font-weight : 800;
    }

    .card {
        box-shadow : 0px 0px 8px black;
    }

    input, select {
        border-radius : 4px;
        box-shadow : 0px 0px 4px #eb2f2f;
        border : none;
        outline : none;
    }
    .card-header {
        height : 70px;
        font-size : 30px;
        padding-top : 10px;
        color : white;
        text-shadow : 0px 0px 4px #eb2f2f;
        border-bottom : 2px solid rgba(0, 0, 0, 0.5);
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
        margin : 30px 0px;
    }

    #selection, #top-selection, #sub-selection {
        display : none;
    }

    @keyframes spin {
        to {
            transform : rotate(360deg);
        }
    }

    #preview-btn-container {
        min-width : 100%;
        max-width : 100%;
        display : flex;
        justify-content: center;
    }

    #preview {
        width : 100px;
        height : 40px;
        border-radius : 8px;
        box-shadow : 0px 0px 4px #eb2f2f;
        background : black;
        display : none;
        color : white;
        border : none;
        outline : none;
    }

    #limiter input {
        min-width : 100%;
        max-width : 100%;
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
            source = `${source}json/${classer.value}/subjects.json`;
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
            var classer = document.getElementById('class-category').value;
            var subber = document.getElementById('subject-category');
            var toppick = document.getElementById('topic-category');
            var toppicker = document.getElementById('top-selection');
            source = `${source}json/${classer}/${subber.value}/topics.json`;
            if (subber.value != 'not') {
                spinner.style.display = 'block';
                try {
                    const response = await this.$http.get(
                        source
                    );
                    this.topics = response.data;
                    spinner.style.display = "none";
                    console.log(this.topics);
                    toppicker.style.display = "block";
                    toppick.innerHTML = `
                                    <option value="not">--Please choose a subtopic--</option>`;
                    this.topics.forEach(topic => {
                        toppick.innerHTML += `
                            <option value="${topic.value}">${topic.name}</option>`;
                    });
                    
                } 
                
                catch (error) {
                    console.log(error);
                }
            }
            
        },

        async spinForSubtopics(source) {
            var spinner = document.getElementById('spin');
            var classer = document.getElementById('class-category').value;
            var subber = document.getElementById('subject-category').value;
            var top = document.getElementById('topic-category');
            var subtick = document.getElementById('subtopic-category');
            var subticker = document.getElementById('sub-selection');
            source = `${source}json/${classer}/${subber}/${top.value}/subtopics.json`;
            if (top.value != 'not') {
                spinner.style.display = 'block';
                try {
                    const response = await this.$http.get(
                        source
                    );
                    this.subtopics = response.data;
                    spinner.style.display = "none";
                    console.log(this.subtopics);
                    subticker.style.display = "block";
                    subtick.innerHTML = `
                                    <option value="not">--Please choose a subtopic--</option>`;
                    this.subtopics.forEach(subtopic => {
                        subtick.innerHTML += `
                            <option value="${subtopic.value}">${subtopic.name}</option>`;
                    });
                    
                } 
                
                catch (error) {
                    console.log(error);
                }
            }
            
        },

        async quest(source) {
            var spinner = document.getElementById('spin');
            var classer = document.getElementById('class-category').value;
            var subber = document.getElementById('subject-category').value;
            var top = document.getElementById('topic-category');
            var value = document.getElementById('subtopic-category').value;
            var showglass = document.getElementById('independent');
            var subticker = document.getElementById('sub-selection');
            var preview_btn = document.getElementById('preview');
            
            var url = `${source}quest/${value}`;
            if (top.value != 'not') {
                spinner.style.display = 'block';
                try {
                    const response = await this.$http.post(
                        url
                    );

                    this.questions = response.data;

                    spinner.style.display = "none";
                    preview_btn.style.display = "block";
                    var toChange = [];

                    this.questions.forEach(question => {
                        showglass.innerHTML += `
                            <div style = "display : flex; padding : 12px; flex-direction : column; text-align : left; min-height : 200px; min-width : 90%; max-width : 90%; box-shadow : 0px 0px 8px black; margin : 5%;">        
                                <p><span>${question.id}. </span>${question.question}</p>
                                <p>( A ). ${question.answers[0]}</p>
                                <p>( B ). ${question.answers[1]}</p>
                                <p>( C ). ${question.answers[2]}</p>
                                <p>( D ). ${question.answers[3]}</p>
                                <p>( E ). ${question.answers[4]}</p>
                                <div class = "changeable-btn"><button class="changer" onclick = "this.classList.toggle('changeable'); ${toChange.push(question.id)}">Change</button></div>
                            </div>`;     
                    });
                    
                } 
                
                catch (error) {
                    console.log(error);
                }
            }
            
        },

        change : () => {
            console.log('changeit');
        },

        preview : () => {
            var showglass = document.getElementById('independent');
            showglass.style.display = "block";
        }
    }      
};
</script>


