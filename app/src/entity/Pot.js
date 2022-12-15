export default class Pot {

    constructor (user_id, cabinet_id = null, type_measeure = null, capacity = null, description = null){
        if(user_id === "") throw new Error("User invalid");
        this.user_id = user_id;
        this.cabinet_id = cabinet_id;
        this.type_measeure = capacity;
        this.description = description;
    }

    changeCabinet (new_cabinet_id){
        this.cabinet_id = new_cabinet_id;
    }

}