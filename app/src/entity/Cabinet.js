import Pot from "./Pot";
export default class Cabinet {

    pots ;

    constructor (){
        this.pots = [];
    }

    addPot(pot){
        this.pots.push(pot);
    }

    getTotalPots (){
        return this.pots.length;
    }
}