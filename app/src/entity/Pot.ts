export default class Pot {

    constructor (private user_id: number, public cabinet_id: number = null, type_measeure: string = null, capacity:number = null, description: string = null){
        if(user_id === null) throw new Error("User invalid");
    }

    changeCabinet (new_cabinet_id:number ){
        this.cabinet_id = new_cabinet_id;
    }

    getUserId(){
        return this.user_id;
    }
}