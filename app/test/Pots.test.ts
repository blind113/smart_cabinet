import { expect } from "vitest";
import Pot from "../src/entity/Pot"

test("Novo pote em usuario, devole error", function(){
   expect(()=> new Pot(null)).toThrow(Error);

});


test("Cria novo pote com usuario 10", function(){
   const pot = new Pot(10)
   expect(pot.getUserId()).toBe(10)

});

