<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 py-6">
                <div class="card">
                    <div class="card-header">SET 1</div>

                    <div class="card-body">
                        <div class="col-lg-4 col-md-6" style="display: block;">
                            <div class="box">
                                <div class="row form-group">
                                    <div class="container">
                                        <button v-if = "no != 1" type="button" id="close5" class="xxx">X</button>
                                    
                                        <label for="classcategory5">Select Class & Exam Types:<span style="color:red">*</span></label><br>
                                        <select name="classcategory5" id="classcategory5" class="form-control">
                                            <option value="">--Please choose an option--</option>
                                            <option value="1">BECE, Junior Secondary</option>
                                            <option value="2">WAEC, Senior Secondary</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group" id="subjloader5" style="display: none;">
                                    <div class="offset-md-4 col-md-4">
                                        <i class="fas fa-spinner fa-spin" style="font-size: 30px; color:blue"></i></div>
                                    </div>
                                    <div class="row form-group" style="display: none;" id="subjDiv5">
                                        <div class="container ">
                                            <label for="classsubjects5">Select Subject: <span style="color:red">*</span></label><br>
                                            <select name="classsubjects5" id="classsubjects5" class="form-control">
                                                <option value="">--Please choose a subject--</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group" id="topicDiv5" style="display: none;">
                                    <div class="container ">
                                        <label for="topics5">Select Topic: <span style="color:red">*</span></label><br>
                                        <select name="topics5" id="topics5" class="form-control">
                                            <option value="">--Please choose a topic--</option>
                                            <option value="">Loading Topic List...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group" id="subtopicDiv5" style="display: none;">
                                    <div class="container ">
                                        <label for="subtopics5">Select Subtopic: <span style="color:red">*</span></label><br>
                                        <select name="subtopics5" id="subtopics5" class="form-control">
                                            <option value="">--Please choose a subtopic--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group" id="topicloader5" style="display: none;">
                                    <div class="offset-md-4 col-md-4"><i class="fas fa-spinner fa-spin" style="font-size: 30px; color:blue"></i></div>
                                </div>
                                <div class="row form-group">
                                    <div class="container">
                                        <label for="subtopic2">Number of questions: <span style="color:red">*</span></label><br>
                                        <input type="number" min="0" max="10" class="form-control" id="count5" name="count5" />
                                        <label class="text text-danger" id="counterror5">Number should be between 1 and 10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <br />
                                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
      .xxx {
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
export default {
    props : {
        no : Number
    },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>


