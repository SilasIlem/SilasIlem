<template>
    <div>
        <span>{{no}}</span> - {{title}}
        <p>
            Subjects : Physics.
        </p>
        <p>
            Topic : Physics.
        </p>
        <p>
            Total Number of Questions Generated : Physics.
        </p>
        <p>
            Time of Generation : Dec. 26, 2021, 2:48 p.m.
        </p>
    </div>
</template>

<style scoped>
    div {
        min-height : 100px;
        width : 100%;
        margin : 30px 5px;
        padding : 10px;
        box-shadow : 0px 0px 8px #eb2f2f;
        border-radius : 8px;
    }
</style>

<script>
export default {
    props : {
        title : String,
        no : Number
    }
}
</script>