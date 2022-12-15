import Pot from "./Pot";
export default class Cabinet {

    pots : Pot[];

    constructor (){
        this.pots = [];
    }

    addPot(pot: Pot){
        this.pots.push(pot);
    }

    getTotalPots (){
        return this.pots.length;
    }
}