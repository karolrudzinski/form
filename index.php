<?php $pageTitle = 'veri_form';?>
<?php include "./include/head.php"?>
<?php include "./include/header.php"?>

    <main class="main">
        <div class="formContainer">
            <form action="">
                <div class="formHeader">
                    <h1 class="formHeading">Course Feedback Form</h2>
                </div>
                <div class="formBox formBoxBlue">
                    <div class="inputWrap">
                        <label for="" class="inputLabel">Course name</label>
                        <input class="textInput" placeholder="Enter course name"  type="text">
                    </div>
                    <div class="inputWrap top25" id="dateWrap">
                        <label for="" class="inputLabel ">Course date</label>
                        <div class="dateInput">
                            <input class="textInput" placeholder="10.10.2019"  type="text" id="datepicker">
                        </div>
                    </div>
                    <div class="inputWrap top25">
                        <p class="textDesc">We are always keen to improve the quality of our courses and as such rely on your feedback to do so. We would be greatful if you could take 2 minutes to provide feedback.</p>
                        <img src="/images/Thankyou.svg" alt="" class="thankYouImg">
                    </div>
                </div>
                <div class="formBox">
                    <div class="inputWrap" id="sites">
                        <label for="" class="inputLabel">The course has met my expectations.</label>
                        <div class="emoteContainer">
                            <div class="emoteWrap">
                                <label class="smileyLabel" for="smiley-1">
                                    <img src="/images/smileys/rank1.png" alt="">
                                </label>
                                <input id="smiley-1" name="smiley" class="emoteInput emoteInput-1" type="radio">
                                <p class="emoteDesc">Very<br/> dissatisfied</p>
                            </div>

                            <div class="emoteWrap">
                                <label class="smileyLabel" for="smiley-2">
                                    <img src="/images/smileys/rank2.png" alt="">
                                </label>
                                <input id="smiley-2" name="smiley" class="emoteInput emoteInput-1" type="radio">
                                <p class="emoteDesc">Somewhat dissatisfied</p>
                            </div>
                            <div class="emoteWrap">
                                <label class="smileyLabel" for="smiley-3">
                                    <img src="/images/smileys/rank3.png" alt="">
                                </label>
                                <input id="smiley-3" name="smiley" class="emoteInput emoteInput-1"
                                type="radio">
                                <p class="emoteDesc">Neither satisfied nor dissatisfied</p>
                            </div>
                            <div class="emoteWrap">
                                <label class="smileyLabel" for="smiley-4">
                                    <img src="/images/smileys/rank4.png" alt="">
                                </label>
                                <input id="smiley-4" name="smiley" class="emoteInput emoteInput-1" type="radio">
                                <p class="emoteDesc">Somewhat satisfied</p>
                            </div>

                            <div class="emoteWrap">
                                <label class="smileyLabel" for="smiley-5">
                                    <img src="/images/smileys/rank5.png" alt="">
                                </label>
                                <input id="smiley-5" name="smiley" class="emoteInput emoteInput-1" type="radio">
                                <p class="emoteDesc">Very<br/> satisfied</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formBox">
                    <div class="inputWrap">
                        <label for="" class="inputLabel">I would recommend this course to others.</label>
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
                <div class="formBox">
                    <div class="inputWrap">
                        <label for="" class="inputLabel">What changes would you recommend to improve it for the benefit of future participants?</label>
                        <input class="textInput" placeholder="Optional"  type="text">
                    </div>
                </div>
                <div class="formBox">
                    <div class="inputWrap">
                        <label class="inputLabel" for="">What changes would you recommend to improve it for the benefit of future participants?</label>
                        <textarea class="textInput" ></textarea>
                    </div>
                </div>
                <div class="formBox">
                    <div class="inputWrap">
                        <label class="inputLabel" for="">Overall, how satisfied or dissatisfied are you with our company?</label>
                        <div class="checkboxContainer">
                            <div class="checkboxWrap">
                                <input class="styledCheckbox" id="styledCheckbox-1" type="checkbox" value="value1">
                                <label class="inputInfo" for="styledCheckbox-1">Very Satisfied</label>
                            </div>
                            <div class="checkboxWrap">
                                <input class="styledCheckbox" id="styledCheckbox-2" type="checkbox" value="value2">
                                <label class="inputInfo" for="styledCheckbox-2">Somewhat satisfied</label>
                            </div>
                            <div class="checkboxWrap">
                                <input class="styledCheckbox" id="styledCheckbox-3" type="checkbox" value="value3">
                                <label class="inputInfo" for="styledCheckbox-3">Neither satisfied nor dissatisfied</label>
                            </div>
                            <div class="checkboxWrap">
                                <input class="styledCheckbox" id="styledCheckbox-4" type="checkbox" value="value4">
                                <label class="inputInfo" for="styledCheckbox-4">Somewhat dissatisfied</label>
                            </div>
                            <div class="checkboxWrap">
                                <input class="styledCheckbox" id="styledCheckbox-5" type="checkbox" value="value5">
                                <label class="inputInfo" for="styledCheckbox-5">Very dissatisfied</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formBox">
                    <div class="inputWrap">
                        <label class="inputLabel" for="">Overall, how satisfied or dissatisfied are you with our curriculum?</label>
                        <div class="radioContainer">
                            <div class="radioItem">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-1" name="radioSatisfied">
                                    <label class="inputInfo" for="radio-1">Very satisfied</label>
                                </label>
                            </div>
                            <div class="radioItem">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-2" name="radioSatisfied">
                                    <label class="inputInfo" for="radio-2">Somewhat satisfied</label>
                                </label>
                            </div>
                            <div class="radioItem">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-3" name="radioSatisfied">
                                    <label class="inputInfo" for="radio-3">Neither satisfied nor dissatisfied</label>
                                </label>
                            </div>
                            <div class="radioItem">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-4" name="radioSatisfied">
                                    <label class="inputInfo" for="radio-4">Somewhat dissatisfied</label>
                                </label>
                            </div>
                            <div class="radioItem">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-5" name="radioSatisfied">
                                    <label class="inputInfo" for="radio-5">Very dissatisfied</label>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formBox">
                    <div class="inputWrap">
                        <label for="" class="inputLabel">The course has met my expectations.</label>
                        <div class="radioRow">
                            <div class="radioRowWrap">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-very-sat-1" name="radio-choice">
                                    <label class="inputInfo" for="radio-very-sat-1"></label>
                                </label>
                                <p class="emoteDesc">Very<br/> dissatisfied</p>
                            </div>
                            <div class="radioRowWrap">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-very-sat-2" name="radio-choice">
                                    <label class="inputInfo" for="radio-very-sat-2"></label>
                                </label>
                                <p class="emoteDesc">Somewhat<br/> dissatisfied</p>
                            </div>
                            <div class="radioRowWrap">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-very-sat-3" name="radio-choice">
                                    <label class="inputInfo" for="radio-very-sat-3"></label>
                                </label>
                                <p class="emoteDesc">Neither satisfied<br/> nor dissatisfied</p>
                            </div>

                            <div class="radioRowWrap">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-very-sat-4" name="radio-choice">
                                    <label class="inputInfo" for="radio-very-sat-4"></label>
                                </label>
                                <p class="emoteDesc">Somewhat<br/> satisfied</p>
                            </div>
                            <div class="radioRowWrap">
                                <label class="radioWrap">
                                    <input type="radio" id="radio-very-sat-5" name="radio-choice">
                                    <label class="inputInfo" for="radio-very-sat-5"></label>
                                </label>
                                <p class="emoteDesc">Very<br/> satisfied</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formBox formFooter">
                    <input type="submit" value="Save Feedback" class="btn btnGreen">
                </div>
            </form>
        </div>
    </main>



<?php include "./include/footer.php"?>