import sys
sys.path.insert(0, r"D:\Study\projects\income_class_classification\Capstone\src\main\python")
import unittest
import ann
import numpy as np

y_test = np.array([1,0,1,1,1,0,0,0])
y_pred = np.array([0,0,0,1,1,0,0,1])
output = np.array([[3,1],[2,2]])

class TestANN(unittest.TestCase): 
      
    def setUp(self): 
        pass

    # Returns True if the string contains 4 a. 
    def test_conf_mat(self):
        global y_test, y_pred, output
        result = ann.conf_mat(y_test, y_pred)
        r_shape=result.shape
        o_shape=output.shape
        self.assertEqual(r_shape, o_shape) 

if __name__ == '__main__': 
    unittest.main() 