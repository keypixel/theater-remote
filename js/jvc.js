

function sendCharacterJVC(character) {
    console.log(character);
    fetch('/theater-remote/scripts/jvc/jvc-commands.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'character=' + encodeURIComponent(character)
    })
        .then(response => response.text())
        .then(responseText => {
            $get('#response').textContent += responseText;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function jvc() {
    console.log('jvc loaded');

    $$get('button.jvc').forEach($button => {
        
        $button.addEventListener('touchstart', event => {
            event.preventDefault();
            const character = $button.value;
            // console.log(character);

            sendCharacterJVC(character);
        });

    });

}

