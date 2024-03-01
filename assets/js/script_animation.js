  
document.addEventListener("DOMContentLoaded", function () {
    const texts = ["Your trusted partner for swift and secure money transfers designed to meet the unique financial needs of the Filipino community."];
    let currentTextIndex = 0;
    let currentText = texts[currentTextIndex];
    let letterIndex = 0;

    function typeText() {
        if (letterIndex < currentText.length) {
            document.querySelector(".typing-text-bilispera").textContent += currentText.charAt(letterIndex);
            letterIndex++;
            setTimeout(typeText, 50); // Adjust typing speed here
        }
    }

    typeText(); // Start the typing animation
});

document.addEventListener("DOMContentLoaded", function () {
    const texts = ["Explore Pinoy Legal for tailored legal services, including immigration law. Rely on us as your steadfast ally."];
    let currentTextIndex = 0;
    let currentText = texts[currentTextIndex];
    let letterIndex = 0;

    function typeText() {
        if (letterIndex < currentText.length) {
            document.querySelector(".typing-text-pinoylegal").textContent += currentText.charAt(letterIndex);
            letterIndex++;
            setTimeout(typeText, 50); // Adjust typing speed here
        }
    }

    typeText(); // Start the typing animation
});

document.addEventListener("DOMContentLoaded", function () {
    const texts = ["Explore Kabalikat Solutions for quick and precise processing of vital IDs, NBI Clearances, and PSA documents."];
    let currentTextIndex = 0;
    let currentText = texts[currentTextIndex];
    let letterIndex = 0;

    function typeText() {
        if (letterIndex < currentText.length) {
            document.querySelector(".typing-text-kabalikat").textContent += currentText.charAt(letterIndex);
            letterIndex++;
            setTimeout(typeText, 50); // Adjust typing speed here
        }
    }

    typeText(); // Start the typing animation
});

document.addEventListener("DOMContentLoaded", function () {
    const texts = ["Experience affordable and unforgettable travel with Bilis Voyage and Bilis Alis. From seamless departures to lasting vacation memories."];
    let currentTextIndex = 0;
    let currentText = texts[currentTextIndex];
    let letterIndex = 0;

    function typeText() {
        if (letterIndex < currentText.length) {
            document.querySelector(".typing-text-bilisalis").textContent += currentText.charAt(letterIndex);
            letterIndex++;
            setTimeout(typeText, 50); // Adjust typing speed here
        }
    }

    typeText(); // Start the typing animation
});



document.addEventListener("DOMContentLoaded", function () {
    const texts = ["Pilipino.", "Kababayan.", "Lahat."];
    let currentTextIndex = 0;
    let currentText = texts[currentTextIndex];
    let letterIndex = 0;

    function typeText() {
        if (letterIndex < currentText.length) {
            document.querySelector(".typing-text").textContent += currentText.charAt(letterIndex);
            letterIndex++;
            setTimeout(typeText, 50); // Adjust typing speed here
        } else {
            setTimeout(eraseText, 2000); // Adjust pause before erasing here
        }
    }

    function eraseText() {
        if (letterIndex > 0) {
            const text = currentText.substring(0, letterIndex - 1);
            document.querySelector(".typing-text").textContent = text;
            letterIndex--;
            setTimeout(eraseText, 30); // Adjust erasing speed here
        } else {
            currentTextIndex = (currentTextIndex + 1) % texts.length;
            currentText = texts[currentTextIndex];
            setTimeout(typeText, 500); // Adjust pause before typing next text here
        }
    }

    typeText(); // Start the typing animation
});

$(document).ready(function() {
    $(window).on('scroll', function() {
        var windowHeight = $(window).height();
        var windowScrollTop = $(window).scrollTop();
        var sectionOffset = $('#company-section').offset().top;

        if (windowScrollTop + windowHeight > sectionOffset) {
            $('#company-section').css({
                'opacity': '1',
                'transform': 'translateY(0)'
            });
        }
    });
});

$(document).ready(function() {
    $(window).on('scroll', function() {
        var windowHeight = $(window).height();
        var windowScrollTop = $(window).scrollTop();
        var sectionOffset = $('#about-section').offset().top;

        if (windowScrollTop + windowHeight > sectionOffset) {
            $('#about-section').css({
                'opacity': '1',
                'transform': 'translateY(0)'
            });
        }
    });
});

$(document).ready(function() {
    $(window).on('scroll', function() {
        var windowHeight = $(window).height();
        var windowScrollTop = $(window).scrollTop();
        var sectionOffset = $('#services-section').offset().top;

        if (windowScrollTop + windowHeight > sectionOffset) {
            $('#services-section').css({
                'opacity': '1',
                'transform': 'translateY(0)'
            });
        }
    });
});

$(document).ready(function() {
    $(window).on('scroll', function() {
        var windowHeight = $(window).height();
        var windowScrollTop = $(window).scrollTop();
        var sectionOffset = $('#location-section').offset().top;

        if (windowScrollTop + windowHeight > sectionOffset) {
            $('#location-section').css({
                'opacity': '1',
                'transform': 'translateY(0)'
            });
        }
    });
});

$(document).ready(function() {
    $(window).on('scroll', function() {
        var windowHeight = $(window).height();
        var windowScrollTop = $(window).scrollTop();
        var sectionOffset = $('#what-we-do').offset().top;

        if (windowScrollTop + windowHeight > sectionOffset) {
            $('#what-we-do').css({
                'opacity': '1',
                'transform': 'translateY(0)'
            });
        }
    });
});




  