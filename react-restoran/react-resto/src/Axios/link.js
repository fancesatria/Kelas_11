import axios from 'axios';


const url = "http://localhost:8000/api";
let token = "oDXSrK1W7Qj489IjIm4AYRNSCxmbS43O384eF2RM";

export const link = axios.create({
    baseURL: url,
    headers: {
        'api_token':token
        }
});