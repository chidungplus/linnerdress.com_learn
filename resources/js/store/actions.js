export default {
    changeTasks({ commit }, newTasks) {
        // console.log("Action changeTasks", newTasks);
        commit('CHANGE_TASKS', newTasks)
    },
    toggleForm({ commit }) {
        // console.log("Action toggleForm");
        commit('TOGGLE_FORM');
    },
    handleSearch({ commit }, strSearch) {
        // console.log("Action handleSearch", strSearch);
        commit('HANDLE_SEARCH', strSearch);
    },
    handleSort({ commit }, { orderBy, orderDir }) {
        // console.log("Action handleSort", orderBy, orderDir);
        commit('HANDLE_SORT', { orderBy, orderDir });
    },
    handleDelete({ commit, state }, taskDelete) {
        console.log("Action handleDelete", taskDelete);
        let newListTask = state.listTask.filter(item => item.id !== taskDelete.id);
        commit('CHANGE_TASKS', newListTask);
    },
    handleAddNewTask({ commit }, task) {
        commit('ADD_NEW_TASK', task);
    },
    handleEdit({ commit }, taskSelected) {
        commit('HANDLE_EDIT', taskSelected);
    },
    handleEditTaskById({ commit, state, dispatch }, taskEdit) {
        let index = state.listTask.findIndex(item => item.id === taskEdit.id);
        let listTaskClone = [...state.listTask];

        if(index !== -1) {
            listTaskClone.splice(index, 1, taskEdit);
            // dispatch('toggleForm')
            commit('TOGGLE_FORM');
            commit('CHANGE_TASKS', listTaskClone);
        }
    },
    addCart({ commit }, carts) {
        console.log(carts, 'actions');
        commit('SAVE_CART', carts);
    },
}