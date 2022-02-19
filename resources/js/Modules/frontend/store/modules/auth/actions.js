import { request } from "../../../mixins/request";

export default 
{
    fetchAuthLogin(context, payload)
    {
        // context.commit("setAuth", payload);
        return  request.methods.makeRequest("POST","/customer/login",payload,false)
            .then((data) => {
                if(data.status==200){
                    
                    context.commit("setAuth", data?.data?.data);
                    localStorage.setItem('user_auth',JSON.stringify(data?.data.data))
                }
                return data
                
            })
    }
};