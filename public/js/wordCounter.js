function wordCounter(inputId, counterId, maxCharacters){
    var input = document.getElementById(inputId);
    var counter = document.getElementById(counterId);

    counter.innerText = `0 / ${maxCharacters}`;

    title.addEventListener("keyup", function()
        {
            var chars = input.value.split('');
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
