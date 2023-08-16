function limitSelection(checkbox, maxSelection) {
    var checkboxes = document.getElementsByName('your-doctor[]');
    var checkedCount = 0;

    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            checkedCount++;
        }
    }
    if (checkedCount >= maxSelection) {
        for (var i = 0; i < checkboxes.length; i++) {
           if (!checkboxes[i].checked) {
            checkboxes[i].disabled = true;
           }
        }
    } else {
        for (var i = 0; i < checkboxes.length; i++) {
          checkboxes[i].disabled = false;
        }
    }
    // Trả lại trạng thái ban đầu của checkbox sau khi submit
    document.addEventListener('submit', function() {
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].disabled = false;
        }
    });
}
