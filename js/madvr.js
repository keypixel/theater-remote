

function sendCharacter(character) {
    console.log(character);
    fetch('/theater-remote/scripts/send-keys.php', {
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

function madVR() {
    console.log('madVR loaded');
    let keyInterval = null;
    const incrementInterval = 60;

    $$get('button.madvr').forEach($button => {
        $button.addEventListener('touchstart', event => {
            event.preventDefault();
            const character = event.target.getAttribute('value');
            
            if ($button.className.includes('incriment')) {
                let count = 0;
                // get max interval from class
                const max = parseInt($button.className.match(/\b(\d+)\b/));

                if (max) { 
                    console.log(max);
                    keyInterval = setInterval(() => {
                        if (count < max) {
                          sendCharacter(character);
                          count++;
                    
                          if (count === max) {
                            clearInterval(keyInterval);
                            console.log('max reached = ', max);
                          }
                        }
                      }, incrementInterval);
                }
            } else {
                // only send once
                console.log('send once = ', character);
                sendCharacter(character);
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

window.onload = function() {
    power();
    tabs();
    madVR();
}