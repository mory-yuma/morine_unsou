// fv
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.fv_morine_fade-in');
    setTimeout(() => {
        elements.forEach(element => {
            element.classList.add('action');
        });
    }, 400); 
});
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.fv_transpoter_fade-in');
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


// jQuery(document).ready(function($) {
//     $('.slick01').slick({
//         slidesToShow: 1,        // 1つのスライドを表示
//         slidesToScroll: 1,      // 1つずつスクロール
//         autoplay: true,         // 自動再生
//         autoplaySpeed: 1000,    // 3秒ごとにスライド
//         dots: true,             // 下部のドット表示
//         arrows: true,           // 左右の矢印表示
//         infinite: true,         // 無限ループ
//         adaptiveHeight: true    // 高さを自動調整
//     });
// });

// modalWindow
const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");
const modal = document.getElementById("modal");
// モーダルを開く
openModal.addEventListener("click", () => {
    modal.style.display = "flex"; // モーダルを表示
});
// モーダルを閉じる
closeModal.addEventListener("click", () => {
    modal.style.display = "none"; // モーダルを非表示
});
// モーダルの外側をクリックしたら閉じる
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

