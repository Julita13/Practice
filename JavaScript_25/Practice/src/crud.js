const dataApi = 'https://pewter-mint-spring.glitch.me';
export const fetchData = async () => {
    try {
      const response = await fetch(dataApi);
      if (response.ok) {
        // console.log(response)
        return await response.json();        
      }
    } catch (error) {
      console.error(error);
    }
  }
  export const postData = async (data) => {
    try{
        const response = await fetch(dataApi+"/data", {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                Accept: "application/json",
                'Content-Type': 'application/json',
            }
        });
        if(response.ok){
            return await response.json()
        }
    }catch (error) {
        console.log(error)
    }
  }