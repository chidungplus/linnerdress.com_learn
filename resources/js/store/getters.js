export default {
    listTaskSearchSort: state => {
        // state.strSearch - state.listTask
        // Search
        const { strSearch } = state;
			
        var newItems = state.listTask.filter(item => {
            return item.name.toLowerCase().includes(strSearch.toLowerCase());
        });
        
        // Sort
        var listTask = [...newItems];
            listTask.sort(function(a, b) {
                var numberSort = state.orderDir === 'asc' ? -1 : 1;
                
                if(a[state.orderBy] < b[state.orderBy]) return numberSort;
                else if(a[state.orderBy] > b[state.orderBy]) return numberSort * (-1);
                return 0;
            });
        
        return listTask;
    }
}