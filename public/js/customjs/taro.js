


function chooseCard(card_id, randnum){
    console.log(chosenCards);
    console.log('render',rendered_cards);
    chosenCards.push(randnum);
    i++;
    if(i==3){
        document.getElementById('name-input').value="";
        $('#form-modal').modal('show');
        // window.location='/abhigya-anand-ready/'+chosenCards[0]+`/${chosenCards[1]}/${chosenCards[2]}`;
    }
    document.getElementById(`taro-card-${card_id}`).src='/appimg/tarocards/'+randnum+'.png';
}

function renderCards(){
    let mycards=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    var random_number=Math.floor( (Math.random()*20) +1 );

    if(mycards.includes(random_number)){

        if(!rendered_cards.includes(random_number)){
            rendered_cards.push(random_number);
            return random_number;
        }else{
            random_number=Math.floor( (Math.random()*20) +1 );
            while (rendered_cards.includes(random_number)) {
                random_number=Math.floor( (Math.random()*20) +1 );

            }

            rendered_cards.push(random_number);
            return random_number;
        }

    }


}

// funciont for onclick next button
function next(){
    let name=document.getElementById('name-input-div');
    let gender= document.getElementById('gender-input-div');
    let nextbtn= document.getElementById('next-button');
    if(name.style.display=='block'){

        name.style.display='none';
        gender.style.display='block';


    }else{
        if(name.style.display=='none'){

            window.location='/abhigya-anand-ready/'+chosenCards[0]+`/${chosenCards[1]}/${chosenCards[2]}`;
        }
    }
}

// Scroll to the product order form
function scrollToOrder(){
    document.getElementById('order-form-div').scrollIntoView();
}



