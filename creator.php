<?php $pageTitle = 'veri_form';?>
<?php include "./include/head.php"?>
<?php include "./include/header.php"?>


<main class="main">
    <form class="creatorForm" action="">
        <div class="formContainer">
            <div class="formHeader">
                <h1 class="formHeading">Build a Course Feedback Form</h2>
            </div>
            <div class="formBox formBoxBlue">
                <div class="inputWrap">
                    <label for="" class="inputLabel">Require a name</label>
                    <div class="radioContainer">
                        <label class="radioWrap">
                            <input type="radio" id="radioYes" name="radio">
                            <label class="inputInfo" for="radioYes">Yes</label>
                        </label>
                        <label class="radioWrap">
                            <input type="radio" id="radioNo" name="radio">
                            <label class="inputInfo" for="radioNo">No</label>
                        </label>
                    </div>
                </div>
            </div>
            <ul class="formContent" id="formContent">
                <li id="question-1" class='formBox'>
                    <div class='inputWrap'>
                        <div class='flexBetween'>
                            <p class='questionNumber'>Question 1</p>
                        </div>
                    </div>
                    <div class='inputWrap top20'>
                        <span class='inputLabel bottom10'>Type</span>
                        <select class='js-example-basic-single' name='state'>
                            <option value='1'>1-5 scale</option>
                            <option value='2'>Yes / No</option>
                            <option value='3'>Multiple choice</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                        </select>
                    </div>
                    <div class='inputWrap top20'>
                        <div class='inputWrap'>
                            <label for='' class='inputLabel'>Description</label>
                            <input class='textInput' type='text'>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="formBox formFooter">
                <div id="addQuestion"class="btn btnTeal">
                    <span class="btnText">Add a question</span>
                </div>
            </div>
        </div>
        <div class="inputWrap">
            <p class="questionNumber">Form building complete?</p>
            <div class="flexContainer top10">
                <img src="/images/info-icon.svg" alt="">
                <p class="textDesc">Please make sure you finished creating your form before saving!</p>
            </div>
            <input type="submit" value="Save Form" class="btn btnGreen top15">
        </div>
    </form>
</main>

<script>
    var newQuestion = $("#addQuestion"),
        formContent = $("#formContent");

    newQuestion.click(function() {
        var questionCount = ($("[id^='question-']").length + 1),
            questionItem = $("<li id='question-" + questionCount +"'class='formBox'><div class='inputWrap'><div class='flexBetween'><p class='questionNumber'>Question " + questionCount +"</p><div class='removeBtn'><span class='removeBtnText'>Remove</span></div></div></div><div class='inputWrap top20'><span class='inputLabel bottom10'>Type</span><select class='js-example-basic-single' name='select-" + questionCount +"'><option value='1'>1-5 scale</option><option value='2'>Yes / No</option><option value='3'>Multiple choice</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option></select></div><div class='inputWrap top20'><div class='inputWrap'><label for='' class='inputLabel'>Description</label><input class='textInput' type='text'></div></div></li>");

        formContent.append(questionItem);
        $('.js-example-basic-single').select2();
    })

    $(document).on('change', '.js-example-basic-single', function() {
        if($(this).val() == "3") {
            $(this).parent().siblings().eq(1).append("<div class='btnContainer'><div class='btnAddAnswer'>Add answer</div></div>")   }

        $(document).on('click', '.btnAddAnswer', function() {
            var answerCount = ($("[id^='answer-']").length + 1),
            answerItem = $("<div class='inputWrap top20'><div class='flexBetween'><label for='answer-"+ answerCount + "'class='inputLabel'>Answer " + answerCount + "</label><div class='btnDeleteAnswer'></div></div><input class='textInput' id='answer-" + answerCount + "'type='text'></div>");
            $(this).parent().closest('.inputWrap').append(answerItem);
            console.log($(this).closest(''));
        });
    });

    $(document).on('click', '.btnDeleteAnswer', function() {
        $(this).closest(".inputWrap").remove();
        console.log('dupa');
    })

    $(document).on('click', '.removeBtn', function() {
       $(this).closest(".formBox").remove();
    });

</script>
<?php include "./include/footer.php"?>

