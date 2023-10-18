
function sendCharacter(character) {
    
    fetch('/theater-remote/scripts/send-keys.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'character=' + encodeURIComponent(character)
    })
    .then(response => response.text())
    .then(responseText => {
        $('#response').textContent += responseText;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function madVR() {
    let keyInterval = null;
    const incrementInterval = 60;

    $$('button.madvr').forEach($button => {

        $button.addEventListener('touchstart', event => {
            event.preventDefault();
            const character = event.target.getAttribute('value');
            console.log(character);
            sendCharacter(character);

            if ($button.classList.contains('incriment')) {
                keyInterval = setInterval(() => {
                    sendCharacter(character);
                }, incrementInterval);
            }
        });

        $button.addEventListener('touchend', () => {
            if (keyInterval !== null) {
                clearInterval(keyInterval);
                keyInterval = null;
            }
        });

        // $button.addEventListener('touchmove', () => {
        //     if (keyInterval !== null) {
        //         clearInterval(keyInterval);
        //         keyInterval = null;
        //     }
        // });
    });

}


madVR();