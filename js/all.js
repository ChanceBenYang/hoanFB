/*初始化bootstrap*/
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
 
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})


//step3.php-------------------------
document.addEventListener("DOMContentLoaded", function () {
    const termBlocks = [
        { element: document.getElementById("member"), checkbox: document.getElementById("CheckboxTerm1") },
        { element: document.getElementById("privacy"), checkbox: document.getElementById("CheckboxTerm2") },
        { element: document.getElementById("terms"), checkbox: document.getElementById("CheckboxTerm3") }
    ];
    const termCheckboxes = termBlocks.map(({ checkbox }) => checkbox).filter(Boolean);
    const queryButton = document.getElementById("BtnResult");
    const updateQueryButton = () => {
        if (queryButton) {
            queryButton.disabled = termCheckboxes.length !== 3 || !termCheckboxes.every(checkbox => checkbox.checked);
        }
    };

    termCheckboxes.forEach(checkbox => checkbox.addEventListener("change", updateQueryButton));
    updateQueryButton();

    termBlocks.forEach(({ element, checkbox }) => {
        if (element && checkbox) {
            const checkIfRead = () => {
                if (element.scrollHeight - element.clientHeight - element.scrollTop <= 2) {
                    checkbox.checked = true;
                    updateQueryButton();
                }
            };

            element.addEventListener("scroll", checkIfRead, { passive: true });
            element.addEventListener("scrollend", checkIfRead);
            checkIfRead();
        }
    });
});

//step1.php-------------------------

//寵物試算按鈕
const btnResult = document.getElementById("BtnResult");
if (btnResult) {
    btnResult.addEventListener("click", function(event) {
        const requiredTerms = ["CheckboxTerm1", "CheckboxTerm2", "CheckboxTerm3"]
            .map(id => document.getElementById(id));
        if (requiredTerms.some(checkbox => !checkbox || !checkbox.checked)) {
            event.preventDefault();
            return;
        }

        setTimeout(() => {
            const element = document.getElementById('Result_selectPet');
            const btnResultCurrent = document.getElementById('BtnResult');
            if (element) {
                element.classList.add('active');
            }
            if (btnResultCurrent) {
                btnResultCurrent.classList.add('d-none');
            }

            // 隱藏 Bootstrap 5 的 modal（id="ModalLoading"）
            const modalEl = document.getElementById('ModalLoading');
            if (modalEl) {
              const modalInstance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl); // 確保 modal 已有實例
              modalInstance.hide();
            }
        }, 2000);
    });
}


//寵物試算選擇
const selectPet_checkboxs = document.querySelectorAll('.selectPet_checkbox');

selectPet_checkboxs.forEach(el => el.addEventListener('change', event => {
    if (el.checked) {
        const parentPanel = el.closest('.pet-card');
        if (parentPanel) {
            parentPanel.classList.add("checked");
        }
    } else {
        const parentPanel = el.closest('.pet-card');
        if (parentPanel) {
            parentPanel.classList.remove("checked");
        }
    }

    const anyChecked = Array.from(selectPet_checkboxs).some(checkbox => checkbox.checked);
    const boxRemind = document.getElementById("BoxRemind");
    const btnNext = document.getElementById("btn-next");

    if (anyChecked) {
        if (boxRemind) boxRemind.classList.add("checked");
        if (btnNext) btnNext.classList.remove("disabled");
    } else {
        if (boxRemind) boxRemind.classList.remove("checked");
        if (btnNext) btnNext.classList.add("disabled");
    }
}));



//step4.php-------------------------
function alertE1() {
    alert("如已有相關障礙或疾病將不予承保！"); 
}
function alertE2() {
    alert("如已投保其他公司寵物險將不予承保！"); 
}
function alertE3() {
    alert("請詳閱詢問內容再行填寫選項！"); 
}
function alertE4() {
    alert("要/被保險人受有監護宣告者不予承保！"); 
}
function alertE5() {
    alert("要/被保險人三個月內有辦理終止契約、貸款或保險單借款者不予承保！"); 
}
function alertE6() {
    alert("要/被保險人居住於中華民國境外超過半年以上者不予承保！"); 
}
function alertE7() {
    alert("要/被保險人現任（或曾任）國內外政府或國際組織之重要政治性職務人士（如：中央或地方民意代表、公務機關首長）者不予承保！"); 
}