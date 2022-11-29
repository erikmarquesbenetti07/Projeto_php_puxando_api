window.addEventListener("load", function(){

    var listaProdutos = []
    var link_sacola = $("[name='_sacola']")
    link_sacola.html(listaProdutos.length + ' itens em sua sacola')

    $('.btn-add').click(function() {
        var captura_id = $(this).attr('id')
        switch (captura_id) {
            case 'addProd01':
                listaProdutos.push('Produto 1')
                break
                
            case 'addProd02':
                listaProdutos.push('Produto 2')
                break

            case 'addProd03':
                listaProdutos.push('Produto 3')
                break

            case 'addProd04':
                listaProdutos.push('Produto 4')
                break

            case 'addProd05':
                listaProdutos.push('Produto 5')
                break
                
            case 'addProd06':
                listaProdutos.push('Produto 6')
                break

            case 'addProd07':
                listaProdutos.push('Produto 7')
                break

            case 'addProd08':
                listaProdutos.push('Produto 8')
                break   
                
            case 'addProd09':
                listaProdutos.push('Produto 9')
                break
                
            case 'addProd10':
                listaProdutos.push('Produto 10')
                break

            case 'addProd11':
                listaProdutos.push('Produto 11')
                break

            case 'addProd12':
                listaProdutos.push('Produto 12')
                break

            default:
                console.log(listaProdutos)
                // break
        }
        link_sacola.html(listaProdutos.length + ' itens em sua sacola')
    })


    $('.btn-remove').click(function() {
        var captura_id = $(this).attr('id')
        strProduto = ''
        if(listaProdutos.length > 0) {
            switch(captura_id) {

                case 'removeProd01':
                    verificaItem(listaProdutos, 'Produto 1')
                    break

                case 'removeProd02':
                    verificaItem(listaProdutos, 'Produto 2')
                    break

                case 'removeProd03':
                    verificaItem(listaProdutos, 'Produto 3')
                    break

                case 'removeProd04':
                    verificaItem(listaProdutos, 'Produto 4')
                    break

                case 'removeProd05':
                    verificaItem(listaProdutos, 'Produto 5')
                    break

                case 'removeProd06':
                    verificaItem(listaProdutos, 'Produto 6')
                    break
                    
                case 'removeProd07':
                    verificaItem(listaProdutos, 'Produto 7')
                    break

                case 'removeProd08':
                    verificaItem(listaProdutos, 'Produto 8')
                    break

                case 'removeProd09':
                    verificaItem(listaProdutos, 'Produto 9')
                    break

                case 'removeProd10':
                    verificaItem(listaProdutos, 'Produto 10')
                    break
                    
                case 'removeProd11':
                    verificaItem(listaProdutos, 'Produto 11')
                    break

                case 'removeProd12':
                    verificaItem(listaProdutos, 'Produto 12')
                    break       
                    
                default:
                    console.log(listaProdutos)
            }
        } else {
            alert('Nenhum item na sacola')
        }
        link_sacola.html(listaProdutos.length + ' itens em sua sacola')
    })

})


function removeItem(_listaProdutos, produto) {
    let indice = _listaProdutos.indexOf(produto)
    if(indice > -1) {
        _listaProdutos.splice(indice, 1)
    }
}


function verificaItem(__listaProdutos, _produto) {
    if(__listaProdutos.includes(_produto)) {
        let strProduto = _produto
        removeItem(__listaProdutos, strProduto)
    }
}