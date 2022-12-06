export default {
    CHANGE_TASKS(state, newTasks) {
        console.log("Mutations: CHANGE_TASKS", newTasks);
        state.listTask = newTasks;
    },
    TOGGLE_FORM(state) {
        if(state.isShowForm) state.taskSelected = null;
        // console.log("Mutation TOGGLE_FORM");
        state.isShowForm = !state.isShowForm;
    },
    HANDLE_SEARCH(state, strSearch) {
        // console.log("Mutations HANDLE_SEARCH", strSearch);
        state.strSearch = strSearch;
    },
    HANDLE_SORT(state, { orderBy, orderDir }) {
        // console.log("Mutations HANDLE_SORT", orderBy, orderDir);
        state.orderBy = orderBy;
        state.orderDir = orderDir;
    },
    ADD_NEW_TASK(state, task) {
        state.listTask.push(task);
    },
    HANDLE_EDIT(state, taskEdit) {
        state.isShowForm = true;
		state.taskSelected = taskEdit;
    },
    SAVE_CART(state, addCart) {
        console.log('mut', addCart);
		state.carts = addCart;
    }
}