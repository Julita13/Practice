const dataApi = 'https://glistening-grey-gerbera.glitch.me/users';

export const fetchData = async () => {
    try {
      const response = await fetch(dataApi);
      if (response.ok) {
        return await response.json();        
      }
    } catch (error) {
      console.error(error);
    }
  };

  export const postData = async (data) => {
    try {
      const response = await fetch(dataApi, {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
          Accept: 'application/json',
          'Content-Type': 'application/json',
        },
      });
      if (response.ok) {
        return await response.json();
      }
    } catch (error) {
      console.error(error);
    }
  };



// export async function fetchData() {
//     try {
//         const response = await fetch(dataApi);
//         if (response.ok) {
//           return await response.json();        
//         }
//       } catch (error) {
//         console.error(error);
//       }
//     };