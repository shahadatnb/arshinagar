function continuouslyWrite() {
    const sentence = "Search For AnyThings Here"; // The text to repeat
    const delay = 100; // Delay in milliseconds between each character

    let index = 0;
    let iteration = 0;
    const totalIterations = null; // Number of times to repeat the text

    function writeCharacter() {
        const currentText = sentence.slice(0, index);

        if (index < sentence.length) {
            document.getElementById("inputField").value = currentText + sentence.charAt(index);
            index++;
            setTimeout(writeCharacter, delay);
        } else {
            iteration++;
            if (iteration === totalIterations) {
                return; // Stop repeating after reaching the desired number of iterations
            }
            index = 0;
            setTimeout(writeCharacter, delay);
        }
    }

    writeCharacter();
}

// Call continuouslyWrite function
continuouslyWrite();

// Sticky Navbar code
window.addEventListener('scroll', function () {
    var navbar = document.getElementById('menubar');
    if (window.pageYOffset > 0) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});