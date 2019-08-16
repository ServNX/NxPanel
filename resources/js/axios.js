import { API_URL } from './constants';
import axios from 'axios';

export default axios.create({
  baseURL: API_URL,
  headers: {
    Authorization: `Bearer ${localStorage.getItem('token')}`,
  },
  transformResponse: [function (data) {
    const resp = JSON.parse(data);
    return resp.data || resp;
  }],
});
