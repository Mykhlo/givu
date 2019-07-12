// step two checkboxes position 
document.addEventListener("DOMContentLoaded", () => {
    let items = document.querySelectorAll('.items');

    items.forEach((item,index)=>{
    
        let list = item.cloneNode(true).children;

        //clean items
        while (item.firstChild) {
            item.removeChild(item.firstChild);
        }
        
        if(list.length < 15){
            let new_element = document.createElement('div');
            new_element.classList.add("offset-md-2");
            new_element.classList.add("col-md-10");
            new_element.classList.add("mt-2");
            while(list.length > 0) {
                new_element.appendChild(list[0]);
            }
            item.appendChild(new_element);
            
        }else if(list.length){            
            let chunk = Math.ceil(list.length / 2);  
            
            //get arrays with indexes
            let divided = chunkIteration(list, chunk);    

            /**
            * Creates new DOM elements and adds existing 
            * separated by an array of indixes
            */
            divided.forEach((element, index)=>{
                let new_element = document.createElement('div');
                if(index == 0){
                    new_element.classList.add("offset-md-2");
                    new_element.classList.add("col-md-5");
                }else{
                    new_element.classList.add("col-md-5");
                }
                let length = element.length;
            
                for(i = 0; i < length; i++){
                    let elem = list[element[i]].cloneNode(true);
                    
                    new_element.appendChild(elem);  
                }
                
                item.appendChild(new_element)
            });            
        }
    });

            /**
            * Returns an array with arrays of the given indexes.
            *
            * @param myArray {Array} array to chunk
            * @param chunk_size {Integer} Size of every group
            */
            function chunkIteration(myArray, chunk_size){
                let index = 0;
                let arrayLength = myArray.length -1;    
                let tempArray = [];   

                for (index = 0; index < arrayLength; index += chunk_size) {
                    let step = index + chunk_size;
                    let group = [];        
                    for(let i = index; i < step; i++){
                        if(i  <= arrayLength)            
                            group.push(i);
                    }
                    tempArray.push(group);        
                }

                return tempArray;
            }
});