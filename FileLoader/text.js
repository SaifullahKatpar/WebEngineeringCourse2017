window.onload = function() {
        var fileInput = document.getElementById('fileInput');
        var fileDisplayArea = document.getElementById('fileDisplayArea');


        fileInput.addEventListener('change', function(e) {
            var file = fileInput.file;
            var textType = /text.*/;

            if (file.type.match(textType)) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    fileDisplayArea.innerText = reader.result;

                }

                reader.readAsText(file);    


            } else {
                fileDisplayArea.innerText = "File not supported!";
            }
        });
}