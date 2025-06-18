define([], function() {
    return {
        init: function() {
                const checkbox = document.querySelector('input[name="coursecontents"]');
                if (checkbox) {
                    const formRow = checkbox.closest('.form-group, .fitem');
                    if (formRow) {
                        formRow.remove();
                        //console.log('[genai_patch] Checkbox "coursecontents" entfernt.');
                    }
                }
                const listactivity = document.querySelector('select[name="courseactivities"]');
                if (listactivity) {
                    const formRow = listactivity.closest('.form-group, .fitem');
                    if (formRow) {
                        formRow.remove();
                        //console.log('[genai_patch] select "courseactivities" entfernt.');
                    }
                }
        }
    };
});
