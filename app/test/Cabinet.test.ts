import Cabinet from "../src/entity/Cabinet"

test("Armario vazio", function(){
    const cabinet = new Cabinet();

    expect(cabinet.getTotalPots()).toBe(0);
})