//Elements
const chatSection = document.getElementById("chat-start");
const username = document.getElementById("username").innerText;
const id = document.getElementById("id").innerText;
const questionNumber = document.getElementById("questionNumber");
const fastRes = document.getElementById("fast-res");

let lastUserAnswer;
let QuestionNumber = 1;
let UserAnswers = {};

function getInnerTextAnswer(gejalaColName, val, $evt) {
    UserAnswers[gejalaColName] = val;
    lastUserAnswer = $evt;
    sendChat(username);
}

function getInputValue(gejalaColName, inputId) {
    const input = document.getElementById(inputId);
    lastUserAnswer, (UserAnswers[gejalaColName] = input.value);
    sendChat(username);
}
function appendBotChat(text) {
    const newDiv = document.createElement("div");
    newDiv.className = "row";

    const newText = document.createElement("div");
    newText.className =
        "py-3 px-3 shadow chat-bubble my-2 rounded animate__animated animate__fadeInUp";

    const botName = document.createElement("small");
    botName.innerText += "Bot";

    const p = document.createElement("p");
    p.innerText += text;

    newText.appendChild(botName);
    newText.appendChild(p);

    newDiv.appendChild(newText);

    chatSection.appendChild(newDiv);
    chatSection.scrollTop = chatSection.scrollHeight;
}

function answers(penyakit) {
    const ansButton1 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('${penyakit}','0','tidak merasakan')">tidak merasakan</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('${penyakit}','1','ya, sudah satu hari')">ya, sudah satu hari</button>`;
    const ansButton3 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('${penyakit}','2','ya, sudah dua hari')">ya, sudah dua hari</button>`;
    const ansButton4 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('${penyakit}','3','ya, sudah tiga hari')">ya, sudah tiga hari</button>`;
    const ansButton5 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('${penyakit}','4','ya, sudah empat hari')">ya, sudah empat hari</button>`;
    const ansButton6 = `<button class="btn btn-outline-secondary shadow fs-6 text-dark" id="ans6" onclick="getInnerTextAnswer('${penyakit}','5','ya, sudah lebih dari empat hari')">ya, sudah lebih dari empat hari</button>`;
    const ans =
        ansButton1 +
        ansButton2 +
        ansButton3 +
        ansButton4 +
        ansButton5 +
        ansButton6;

    return ans;
}

function botChat1() {
    appendBotChat("apakah anda merasakan perut kembung?");

    const ans = answers("perut_kembung");

    fastRes.innerHTML = ans;
 
}

function botChat2() {
    appendBotChat("apakah anda sering sekali sendawa?");

    const ans = answers("sendawa");

    fastRes.innerHTML = ans;

    QuestionNumber++;
}

function botChat3() {
    appendBotChat(
        "apakah anda merasa mual ? (tapi tidak terasa asam dimulut/tenggorokan)"
    );

    const ans = answers("mual");
    fastRes.innerHTML = ans;

    QuestionNumber++;
}

function botChat4() {
    appendBotChat("apakah anda muntah-muntah ?");

    const ans = answers("muntah");

    fastRes.innerHTML = ans;

    QuestionNumber++;
}

function botChat5() {
    appendBotChat(
        "apakah anda merasa naik isi lambung sampai ke tenggorokan ?"
    );

    const ans = answers("regurgitasi");

    fastRes.innerHTML = ans;
    
    QuestionNumber++;
}

function botChat6() {
    appendBotChat("apakah anda merasa dada terasa panas terbakar?");
    
    const ans = answers("heart_burn");

    fastRes.innerHTML = ans;

    QuestionNumber++;
}

function botChat7() {
    appendBotChat("apakah anda merasa neri ulu hati?");

    const ans = answers("nyeri_ulu_hati");

    fastRes.innerHTML = ans;
    
    QuestionNumber++;
}

function botChat8() {
    appendBotChat("apakah anda merasa nyeri ulu hati saat makan ?");

    
    const ans = answers("nyeri_ulu_hati_bila_makan");

    fastRes.innerHTML = ans;

    QuestionNumber++;
}

function botChat9() {
    appendBotChat("apakah anda muntah darah?");

    const ans = answers("muntah_darah");

    fastRes.innerHTML = ans;

    QuestionNumber++;
}

function botChat10() {
    appendBotChat(
        "apakah buang air besar, feses anda berdarah/menghitam dan berlendir?"
    );

    const ans = answers("feses_berdarah_berlendir");

    fastRes.innerHTML = ans;

    QuestionNumber++;
}

function botChatLast() {
    appendBotChat(
        "baiklah, jawaban anda akan kami proses... tunggu sebentar ya"
    );

    const ansButton1 = `<button onclick="postAnswer()" class="btn btn-outline-secondary shadow fs-6 text-dark w-100">baiklah</button>`;

    fastRes.innerHTML = ansButton1;
}

function postAnswer() {
    const token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    UserAnswers["pasien_id"] = id;
    const options = {
        method: "POST",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json;charset=UTF-8",
            "X-CSRF-TOKEN": token,
        },
        body: JSON.stringify(UserAnswers),
    };

    console.log(UserAnswers);

    fetch("/diagnosa/keluhan", options)
        .then((response) => {
            response
                .json()
                .then((e) => {
                    fetch(`/diagnosa/analisa?gejala=${e.id}`)
                        .then((r) => {
                            r.json()
                                .then((res) => {
                                    window.location.href = `/diagnosa/view-hasil-analisa?gejala=${res.id}`;
                                })
                                .catch((err) => console.log(err));
                        })
                        .catch((err) => console.log(err));
                })
                .catch((err) => console.log(err));
        })
        .catch((err) => console.log(err));
}

function sendChat(user) {
    if (QuestionNumber !== 1) {
        const user_ = user ? user : username;
        let bubbleUser = `<div class="row justify-content-end"><div class="py-2 px-3 shadow chat-bubble my-2 rounded animate__animated animate__fadeInUp"><small>${user_}</small><p>${lastUserAnswer}</p></div></div>`;

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
        botChatLast();
    }
}

sendChat();
