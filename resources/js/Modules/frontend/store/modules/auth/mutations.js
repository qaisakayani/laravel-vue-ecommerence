export default 
{
    setAuth(state, payload)
    {
        state.isLogin = true
        state.auth=payload
    },
    logout(state)
    {
        state.isLogin=false;
        localStorage.removeItem('user_auth')
        localStorage.removeItem('user_token')
        
    },
};