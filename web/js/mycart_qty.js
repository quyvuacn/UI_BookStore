$('.control-qty').click(function(e){
    let valueSpan = $(this).find('span')
    let saveQty = $(this).find('.save-qty')
    if(e.target.closest('.control-reduce')){
      valueSpan.text(valueSpan.text()-1)  
      saveQty.attr('value',valueSpan.text())
    }
    if(e.target.closest('.control-increase')){
        valueSpan.text(valueSpan.text()-0+1)  
        saveQty.attr('value',valueSpan.text())
    }
})