//Elements
const chatSection = document.getElementById("chat-start");
const username = document.getElementById("username").innerText;
const questionNumber = document.getElementById("questionNumber");
const fastRes = document.getElementById("fast-res");

let lastUserAnswer;
let QuestionNumber = 1;
let UserAnswers = [];

const possibilityTrue = [
    "ya",
    "iya",
    "y",
    "iyaa",
    "iyaaa",
    "yup",
    "yups",
    "yes",
];
const possibilityFalse = [
    "tidak",
    "no",
    "ga",
    "engga",
    "ngga",
    "nggaa",
    "gak",
    "enggak",
    "nga",
    "nope",
];

function defaultChat(params) {
    return `<div class="row"><div class="py-2 px-3 shadow-sm chat-bubble my-2 rounded "><small>Bot</small><p>${params}</p></div></div>`;
}

function getInnerTextAnswer(val, $evt) {
    UserAnswers.push({ question: QuestionNumber - 1, answer: val });
    lastUserAnswer = $evt;
    sendChat(username);
}

function botChat1() {
    let bubbleBot = defaultChat("apakah anda merasa mual? (ya/tidak)");
    chatSection.innerHTML += bubbleBot;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('1','ya')">ya</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('0','tidak')">tidak</button>`;

    fastRes.innerHTML = ansButton1 + ansButton2;
    QuestionNumber++;
}

function botChat2() {
    let bubbleBot = defaultChat(
        "apakah anda muntah ? jika 'ya', berapakali dalam satu hari?"
    );
    chatSection.innerHTML += bubbleBot;

    let ansButton1 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('5','lebih dari 5 kali')">lebih dari 5 kali</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('4','4 kali')">4 kali</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('3','3 kali')">3 kali</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('2','2 kali')">2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('1','1 kali')">1 kali</button>`;
    let ansButton6 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans6" onclick="getInnerTextAnswer('0','tidak')">tidak</button>`;

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

    let ansButton1 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('5','lebih dari 5 kali')">lebih dari 5 kali</button>`;
    let ansButton2 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('4','4 kali')">4 kali</button>`;
    let ansButton3 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('3','3 kali')">3 kali</button>`;
    let ansButton4 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('2','2 kali')">2 kali</button>`;
    let ansButton5 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('1','1 kali')">1 kali</button>`;
    let ansButton6 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans6" onclick="getInnerTextAnswer('0','tidak')">tidak</button>`;

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

    const ansButton1 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('5','lebih dari 5 kali')">lebih dari 5 kali</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('4','4 kali')">4 kali</button>`;
    const ansButton3 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('3','3 kali')">3 kali</button>`;
    const ansButton4 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans4" onclick="getInnerTextAnswer('2','2 kali')">2 kali</button>`;
    const ansButton5 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans5" onclick="getInnerTextAnswer('1','1 kali')">1 kali</button>`;
    const ansButton6 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans6" onclick="getInnerTextAnswer('0','tidak')">tidak</button>`;

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

    const ansButton1 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans1" onclick="getInnerTextAnswer('1','sangat panas')">sangat panas</button>`;
    const ansButton2 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans2" onclick="getInnerTextAnswer('0.5','panas sedang')">panas sedang</button>`;
    const ansButton3 = `<button class="btn btn-outline-secondary shadow-sm fs-6 text-dark" id="ans3" onclick="getInnerTextAnswer('0','tidak panas')">tidak panas</button>`;
    const ansInput = `
    <div class="d-flex">
        <input type="text" class="form-control me-2" id="ans4" placeholder="brp celcius?">
        <button id="btn-chat" class="btn btn-outline-secondary text-dark shadow" onclick="getInputValue('ans4')"><i class="bi bi-send"></i></button>
    </div>
    `;

    fastRes.innerHTML = ansButton1 + ansButton2 + ansButton3 + ansInput;

    QuestionNumber++;
}

function getInputValue(inputId) {
    const input = document.getElementById(inputId);
    lastUserAnswer = input.value;
    UserAnswers.push({ question: QuestionNumber - 1, answer: lastUserAnswer });
    sendChat(username);
}

function sendChat(user) {
    if (QuestionNumber !== 1) {
        const user_ = user ? user : username;
        let bubbleUser = `<div class="row justify-content-end"><div class="py-2 px-3 shadow-sm chat-bubble my-2 rounded "><small>${user_}</small><p>${lastUserAnswer}</p></div></div>`;

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
    }

    console.log(UserAnswers);
}

sendChat();

window.onbeforeunload = function () {
    return "Dude, are you sure you want to leave? Think of the kittens!";
};
