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
    const scrollableDiv = document.getElementById("member");
    const checkbox = document.getElementById("CheckboxTerm1");
    const scrollableDiv2 = document.getElementById("privacy");
    const checkbox2 = document.getElementById("CheckboxTerm2");
    
    scrollableDiv.addEventListener("scroll", function () {
        // 檢查是否滑動到底部
        if (scrollableDiv.scrollTop + scrollableDiv.clientHeight >= scrollableDiv.scrollHeight) {
            checkbox.checked = true;
        }
    });
    
    scrollableDiv2.addEventListener("scroll", function () {
        // 檢查是否滑動到底部
        if (scrollableDiv2.scrollTop + scrollableDiv2.clientHeight >= scrollableDiv2.scrollHeight) {
            checkbox2.checked = true;
        }
    });
    
});

//step1.php-------------------------

//寵物試算按鈕
document.getElementById("BtnResult").addEventListener("click", function() {
    setTimeout(() => {
        const element = document.getElementById('Result_selectPet');
        if (element) {
        element.classList.add('active');
        document.getElementById('BtnResult').classList.add('d-none');
        }
        
        // 隱藏 Bootstrap 5 的 modal（id="ModalLoading"）
        const modalEl = document.getElementById('ModalLoading');
        if (modalEl) {
          const modalInstance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl); // 確保 modal 已有實例
          modalInstance.hide();
        }
        
        
    }, 2000);
});


//寵物試算選擇
const selectPet_checkboxs = document.querySelectorAll('.selectPet_checkbox');

selectPet_checkboxs.forEach(el => el.addEventListener('change', event => {
    if (el.checked) {
        el.parentElement.parentElement.parentElement.parentElement.classList.add("checked");
    } else {
        el.parentElement.parentElement.parentElement.parentElement.classList.remove("checked");
    }
    
    const anyChecked = Array.from(selectPet_checkboxs).some(checkbox => checkbox.checked);
    if (anyChecked) {
        document.getElementById("BoxRemind").classList.add("checked");
        document.getElementById("btn-next").classList.remove("disabled");
    } else {
        document.getElementById("BoxRemind").classList.remove("checked");
        document.getElementById("btn-next").classList.add("disabled");
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