function wordCounter(inputId, counterId, maxCharacters){
    var input = document.getElementById(inputId);
    var counter = document.getElementById(counterId);
    var chars = input.value.split('');

    // FIXME: There is some repeated code here.

    counter.innerText = `${chars.length} / ${maxCharacters}`;
    if(chars.length > maxCharacters) {
        counter.classList.add("text-red-600");
    }

    input.addEventListener("keyup", function()
        {
            chars = input.value.split('')
            counter.innerText = `${chars.length} / ${maxCharacters}`;

            // Adding and removing color class when character length is exceeded
            if(chars.length > maxCharacters) {
                counter.classList.add("text-red-600");
            }
            else {
                counter.classList.remove("text-red-600");
            }
        }
    );
}
