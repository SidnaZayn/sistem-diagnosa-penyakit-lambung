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
    return `<div class="row"><div class="py-2 px-3 shadow chat-bubble my-2 rounded animate__animated animate__bounce"><small>Bot</small><p>${params}</p></div></div>`;
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
    let bubbleBot = defaultChat(
        "apakah anda merasa dada terasa panas terbakar?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('heart_burn','5','ya, sangat sakit')">ya, sangat sakit</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('heart_burn','4','ya, dan saya masih bisa tahan')">ya, dan saya masih bisa tahan</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('heart_burn','3','ya, lumayan sakit')">ya, lumayan sakit</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('heart_burn','2','tidak terlalu')">tidak terlalu</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('heart_burn','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat2() {
    let bubbleBot = defaultChat(
        "apakah anda merasa naik isi lambung sampai ke tenggorokan ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('regurgitasi','5','ya, sampai muntah')">ya, sampai muntah</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('regurgitasi','4','ya, tapi tidak sampai muntah')">ya, tapi tidak sampai muntah</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('regurgitasi','3','ya, lumayan')">ya, lumayan</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('regurgitasi','2','tidak terlalu')">tidak terlalu</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('regurgitasi','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat3() {
    const bubbleBot = defaultChat(
        "apakah anda merasa mual ? (tapi tidak terasa asam dimulut/tenggorokan)"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('mual','5','ya, sampai muntah')">ya, sampai muntah</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('mual','4','ya, tapi tidak sampai muntah')">ya, tapi tidak sampai muntah</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('mual','3','ya, lumayan')">ya, lumayan</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('mual','2','tidak terlalu')">tidak terlalu</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('mual','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat4() {
    const bubbleBot = defaultChat(
        "apakah anda muntah-muntah ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('muntah','5','ya, sangat sering')">ya, sangat sering</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('muntah','4','ya, lumayan sering')">ya, lumayan sering</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('muntah','3','sesekali (3-4 kali)')">sesekali (3-4 kali)</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('muntah','2','1-2 kali')">1-2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('muntah','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat5() {
    const bubbleBot = defaultChat(
        "apakah anda sering sekali sendawa?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('sendawa','5','ya, sangat sering')">ya, sangat sering</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('sendawa','4','ya, lumayan sering')">ya, lumayan sering</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('sendawa','3','sesekali (3-4 kali)')">sesekali (3-4 kali)</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('sendawa','2','1-2 kali')">1-2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('sendawa','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat6() {
    const bubbleBot = defaultChat(
        "apakah anda merasakan perut kembung?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('perut_kembung','5','ya, sangat kembung sekali')">ya, sangat kembung sekali</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('perut_kembung','4','ya, sering')">ya, sering</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('perut_kembung','3','sesekali muncul rasa kembung')">sesekali muncul rasa kembung</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('perut_kembung','2','jarang kembung')">jarang kembung</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('perut_kembung','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat7() {
    const bubbleBot = defaultChat(
        "apakah anda merasa neri ulu hati?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('nyeri_ulu_hati','5','ya, sangat sering')">ya, sangat sering</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('nyeri_ulu_hati','4','ya, lumayan sering')">ya, lumayan sering</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('nyeri_ulu_hati','3','sesekali (3-4 kali)')">sesekali (3-4 kali)</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('nyeri_ulu_hati','2','1-2 kali')">1-2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('nyeri_ulu_hati','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat8() {
    const bubbleBot = defaultChat(
        "apakah anda merasa nyeri ulu hati saat makan ?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('nyeri_ulu_hati_bila_makan','5','ya, sangat sering')">ya, sangat sering</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('nyeri_ulu_hati_bila_makan','4','ya, lumayan sering')">ya, lumayan sering</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('nyeri_ulu_hati_bila_makan','3','sesekali (3-4 kali)')">sesekali (3-4 kali)</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('nyeri_ulu_hati_bila_makan','2','1-2 kali')">1-2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('nyeri_ulu_hati_bila_makan','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat9() {
    const bubbleBot = defaultChat(
        "apakah anda muntah darah?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('muntah_darah','5','ya, sangat sering')">ya, sangat sering</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('muntah_darah','4','ya, lumayan sering')">ya, lumayan sering</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('muntah_darah','3','sesekali (3-4 kali)')">sesekali (3-4 kali)</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('muntah_darah','2','1-2 kali')">1-2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('muntah_darah','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

    QuestionNumber++;
}

function botChat10() {
    const bubbleBot = defaultChat(
        "apakah buang air besar, feses anda berdarah/menghitam dan berlendir?"
    );
    chatSection.innerHTML += bubbleBot;
    chatSection.scrollTop = chatSection.scrollHeight;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('feses_berdarah_berlendir','5','ya, sangat sering')">ya, sangat sering</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('feses_berdarah_berlendir','4','ya, lumayan sering')">ya, lumayan sering</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('feses_berdarah_berlendir','3','sesekali (3-4 kali)')">sesekali (3-4 kali)</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('feses_berdarah_berlendir','2','1-2 kali')">1-2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('feses_berdarah_berlendir','1','tidak')">tidak</button>`;

    fastRes.innerHTML =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5

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
            response.json()
                .then(e => {
                    fetch(`/diagnosa/analisa?gejala=${e.id}`).then(r => {
                        r.json()
                            .then(res => {
                                window.location.href = `/diagnosa/view-hasil-analisa?gejala=${res.id}`
                                // console.log(res.id)
                            })
                            .catch(err => console.log(err))
                    })
                        .catch(err => console.log(err))
                })
                .catch(err => console.log(err))
        })
        .catch(err => console.log(err))
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
    } else if (QuestionNumber > 10) {
        botChatLast()
    }

}

sendChat();

