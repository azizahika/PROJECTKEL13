<!DOCTYPE html>
<html>
<head>
    <title>KUISIONER</title>
    <link rel="stylesheet" type="text/css" href="/kuisioner.css">
</head>
<body onload="NextQuestion(0)">
    <main>
        <!-- creating a modal for when quiz ends -->
        <div class="modal-container" id="score-modal">
          
            <div class="modal-content-container">
              
                <h1>Terimakasih,kuisioner telah selesai.</h1>
              
                <div class="grade-details">
                    <p>Total terjawab : 10</p>
                    <p>keren : <span id="wrong-answers"></span></p>
                    <p>semangat : <span id="right-answers"></span></p>
                    <p>semua bisa: <span id="grade-percentage"></span>%</p>
                    <p ><span id="remarks"></span></p>
                </div>
              
                <div class="modal-button-container">
                    <button onclick="closeScoreModal()" >kembali</button>
                </div>
              
            </div>
        </div>

        <div class="game-quiz-container">
          
            <div class="game-details-container">
                <h1><span id="player-score"></span> </h1>
                <h1> Pertanyaan : <span id="question-number"></span> / 10</h1>
            </div>

            <div class="game-question-container">
                <h1 id="display-question"></h1>
            </div>

            <div class="game-options-container">
              
               <div class="modal-container" id="option-modal">
                 
                    <div class="modal-content-container">
                         <h1>tolong jawablah</h1>
                      
                         <div class="modal-button-container">
                            <button onclick="closeOptionModal()">Continue</button>
                        </div>
                      
                    </div>
                 
               </div>
              
                <span>
                    <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                    <label for="option-one" class="option" id="option-one-label"></label>
                </span>
              

                <span>
                    <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                    <label for="option-two" class="option" id="option-two-label"></label>
                </span>
              

                <span>
                    <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                    <label for="option-three" class="option" id="option-three-label"></label>
                </span>
              

                <span>
                    <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                    <label for="option-four" class="option" id="option-four-label"></label>
                </span>


            </div>

            <div class="next-button-container">
                <button onclick="handleNextQuestion()">Next Question</button>
            </div>

        </div>
    </main>
    <script src="../kuisioner.js"></script>
</body>
</html>