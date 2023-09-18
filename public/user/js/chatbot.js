//Elements
const chatSection = document.getElementById("chat-start");
const username = document.getElementById("username").innerText;
const id = document.getElementById("id").innerText;
const questionNumber = document.getElementById("questionNumber");
const fastRes = document.getElementById("fast-res");

let lastUserAnswer;
let QuestionNumber = 1;
let UserAnswers = {};

function defaultChat(params) {
    return `<div class="row"><div class="py-2 px-3 shadow chat-bubble my-2 rounded "><small>Bot</small><p>${params}</p></div></div>`;
}

function getInnerTextAnswer(gejalaColName, val, $evt) {
    UserAnswers[gejalaColName] = val;
    lastUserAnswer = $evt;
    sendChat(username);
}

function getInputValue(gejalaColName, inputId) {
    const input = document.getElementById(inputId);
    lastUserAnswer, UserAnswers[gejalaColName] = input.value
    sendChat(username);
}

function botChat1() {
    let bubbleBot = defaultChat("apakah anda merasa mual? (ya/tidak)");
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('mual','1','ya')">ya</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('mual','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;
    QuestionNumber++;
}

function botChat2() {
    let bubbleBot = defaultChat(
        "apakah anda muntah ? jika 'ya', berapakali dalam satu hari?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('muntah','5','lebih dari 5 kali')">lebih dari 5 kali</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('muntah','4','4 kali')">4 kali</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('muntah','3','3 kali')">3 kali</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('muntah','2','2 kali')">2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('muntah','1','1 kali')">1 kali</button>`;
    let ansButton6 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans6" onclick="getInnerTextAnswer('muntah','0','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5 +
        ansButton6;

    QuestionNumber++;
}

function botChat3() {
    let bubbleBot = defaultChat(
        "apakah anda muntah dan terasa asam ? jika 'ya', berapakali dalam satu hari?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('muntah_asam','5','lebih dari 5 kali')">lebih dari 5 kali</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('muntah_asam','4','4 kali')">4 kali</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('muntah_asam','3','3 kali')">3 kali</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('muntah_asam','2','2 kali')">2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('muntah_asam','1','1 kali')">1 kali</button>`;
    let ansButton6 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans6" onclick="getInnerTextAnswer('muntah_asam','0','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5 +
        ansButton6;

    QuestionNumber++;
}

function botChat4() {
    let bubbleBot = defaultChat(
        "apakah anda muntah dan mengeluarkan darah ? jika 'ya', berapakali dalam satu hari?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('muntah_darah','5','lebih dari 5 kali')">lebih dari 5 kali</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('muntah_darah','4','4 kali')">4 kali</button>`;
    const ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('muntah_darah','3','3 kali')">3 kali</button>`;
    const ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('muntah_darah','2','2 kali')">2 kali</button>`;
    const ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('muntah_darah','1','1 kali')">1 kali</button>`;
    const ansButton6 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans6" onclick="getInnerTextAnswer('muntah_darah','0','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5 +
        ansButton6;

    QuestionNumber++;
}

function botChat5() {
    const bubbleBot = defaultChat(
        "apakah anda panas ? jika 'ya', berapa derajat celcius? atau seberapa panas?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('panas','1','sangat panas')">sangat panas</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('panas','0.5','panas sedang')">panas sedang</button>`;
    const ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('panas','0','tidak panas')">tidak panas</button>`;
    const ansInput = `
    <div class="d-flex">
        <input type="text" class="form-control me-2" id="ans4" placeholder="brp celcius?">
        <button id="btn-chat" class="btn btn-outline-secondary text-dark shadow" onclick="getInputValue('panas','ans4')"><i class="bi bi-send"></i></button>
    </div>
    `;

    fastRes.innerHTML = ansButton1 + ansButton2 + ansButton3 + ansInput;

    QuestionNumber++;
}

function botChat6() {
    const bubbleBot = defaultChat(
        "apakah anda merasakan sakit perut seperti menahan buang air?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('sakit_perut','1','ya, sangat sakit')">ya, sangat sakit</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('sakit_perut','0.5','tidak terlalu sakit')">tidak terlalu sakit</button>`;
    const ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('sakit_perut','0','tidak sakit')">tidak sakit</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2 + ansButton3;

    QuestionNumber++;
}

function botChat7() {
    const bubbleBot = defaultChat(
        "apakah anda sering buang air besar ? jika 'ya', seberapa sering dalam satu hari?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('buang_air_besar','5','lebih dari 5 kali')">lebih dari 5 kali</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('buang_air_besar','4','4 kali')">4 kali</button>`;
    const ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('buang_air_besar','3','3 kali')">3 kali</button>`;
    const ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('buang_air_besar','2','2 kali')">2 kali</button>`;
    const ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('buang_air_besar','1','1 kali')">1 kali</button>`;
    const ansButton6 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans6" onclick="getInnerTextAnswer('buang_air_besar','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2 + ansButton3 + ansButton4 + ansButton5 + ansButton6;

    QuestionNumber++;
}

function botChat8() {
    const bubbleBot = defaultChat(
        "apakah anda luka/sariawan ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('mulut_luka','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('mulut_luka','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat9() {
    const bubbleBot = defaultChat(
        "apakah anda merasakan bibir pecah-pecah dan kering ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('bibir_pecah','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('bibir_pecah','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat10() {
    const bubbleBot = defaultChat(
        "apakah anda merasa lemas / lesu ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('badan_lesu','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('badan_lesu','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat11() {
    const bubbleBot = defaultChat(
        "apakah anda merasa pusing / kunang-kunang ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('pusing','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('pusing','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat12() {
    const bubbleBot = defaultChat(
        "apakah anda kehilangan nafsu makan ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('kehilangan_nafsu','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('kehilangan_nafsu','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat13() {
    const bubbleBot = defaultChat(
        "apakah anda merasakan perut nyeri/perih ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('perut_nyeri','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('perut_nyeri','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat14() {
    const bubbleBot = defaultChat(
        "apakah anda merasa mulut dan tenggorokan kering ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('mulut_kering','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('mulut_kering','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat15() {
    const bubbleBot = defaultChat(
        "apakah anda merasa sering bersendawa ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('sering_sendawa','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('sering_sendawa','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat16() {
    const bubbleBot = defaultChat(
        "apakah anda merasa sulit tidur ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('sulit_tidur','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('sulit_tidur','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat17() {
    const bubbleBot = defaultChat(
        "apakah anda merasa bengkak di area rahang ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('bengkak_rahang','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('bengkak_rahang','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat18() {
    const bubbleBot = defaultChat(
        "apakah anda merasa nafas anda bau dan bau tersebut berasal dari tenggorokan ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('bau_nafas','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('bau_nafas','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat19() {
    const bubbleBot = defaultChat(
        "apakah Buang Air Besar anda berdarah dan berlendir ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('feses_berdarah_berlendir','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('feses_berdarah_berlendir','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChat20() {
    const bubbleBot = defaultChat(
        "apakah anda tidak buang air besar dalam waktu yang lama (lebih dari 5 hari)?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('tidak_buang_besar','1','ya')">ya</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('tidak_buang_besar','0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;

    QuestionNumber++;
}

function botChatLast() {
    const bubbleBot = defaultChat(
        "baiklah, jawaban anda akan kami proses... tunggu sebentar ya"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    const ansButton1 = `<button onclick="postAnswer()" class="btn btn-outline-secondary shadow fs-6 text-dark w-100">baiklah</button>`;

    fastRes.innerHTML = ansButton1;
}

function postAnswer() {
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    UserAnswers['pasien_id'] = id;
    const options = {
        method: "POST",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json;charset=UTF-8",
            'X-CSRF-TOKEN': token,
        },
        body: JSON.stringify(UserAnswers)
    }

    console.log(UserAnswers)

    fetch('/diagnosa/keluhan', options)
        .then((response) => {
            response.json().then(e => {
                window.location.href = `/diagnosa/analisa?gejala=${e.id}`
            })
        })

}

function sendChat(user) {
    if (QuestionNumber !== 1) {
        const user_ = user ? user : username;
        let bubbleUser = `<div class="row justify-content-end"><div class="py-2 px-3 shadow chat-bubble my-2 rounded "><small>${user_}</small><p>${lastUserAnswer}</p></div></div>`;

        chatSection.innerHTML += bubbleUser;
    }

    if (QuestionNumber === 1) {
        botChat1();
    } else if (QuestionNumber === 2) {
        botChat2();
    } else if (QuestionNumber === 3) {
        botChat3();
    } else if (QuestionNumber === 4) {
        botChat4();
    } else if (QuestionNumber === 5) {
        botChat5();
    } else if (QuestionNumber === 6) {
        botChat6();
    } else if (QuestionNumber === 7) {
        botChat7();
    } else if (QuestionNumber === 8) {
        botChat8();
    } else if (QuestionNumber === 9) {
        botChat9();
    } else if (QuestionNumber === 10) {
        botChat10();
    } else if (QuestionNumber === 11) {
        botChat11();
    } else if (QuestionNumber === 12) {
        botChat12();
    } else if (QuestionNumber === 13) {
        botChat13();
    } else if (QuestionNumber === 14) {
        botChat14();
    } else if (QuestionNumber === 15) {
        botChat15();
    } else if (QuestionNumber === 16) {
        botChat16();
    } else if (QuestionNumber === 17) {
        botChat17();
    } else if (QuestionNumber === 18) {
        botChat18();
    } else if (QuestionNumber === 19) {
        botChat19();
    } else if (QuestionNumber === 20) {
        botChat20();
    } else if (QuestionNumber > 20) {
        botChatLast()
    }

    // console.log(UserAnswers);
}

sendChat();

