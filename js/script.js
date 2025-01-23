// fv
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.fv_fade-in');
    setTimeout(() => {
        elements.forEach(element => {
            element.classList.add('action');
        });
    }, 400); 
});
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.fv_fade-in2');
    setTimeout(() => {
        elements.forEach(element => {
            element.classList.add('action');
        });
    }, 600); 
});
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.header');
    setTimeout(() => {
        elements.forEach(element => {
            element.classList.add('action');
        });
    }, 800); 
});
// もりねうんそうについて
document.addEventListener('scroll', function() {
    // 一度にすべてのターゲット要素を取得
    const elements = document.querySelectorAll('.under_fade-in');

    // スクロール時に一括でクラスを追加
    const windowHeight = window.innerHeight;
    elements.forEach(element => {
        const rect = element.getBoundingClientRect();
        if (rect.top < windowHeight && rect.bottom > 0) {
            element.classList.add('action');
        }
    });
});
// modalWindow
const openButtons = document.querySelectorAll(".must-skill");
const modals = document.querySelectorAll(".modal"); 
openButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        modals[index].style.display = "flex"; // 該当するモーダルを表示
    });
});
modals.forEach((modal) => {
    const closeButton = modal.querySelector(".close-btn");
    // モーダルを閉じる
    closeButton.addEventListener("click", () => {
        modal.style.display = "none"; // モーダルを非表示
    });
    // モーダルの外側をクリックしたら閉じる
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});

