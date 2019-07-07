import matplotlib.pyplot as plt
import tensorflow as tf
import numpy as np

from object_detection.utils import label_map_util
from object_detection.utils import visualization_utils as vis_util

import sys


class Detect_Accident(object):
    def __init__(self):
        model = 'graph/frozen_inference_graph.pb'
        self.graph = tf.Graph()
        with self.graph.as_default():
            graphDef = tf.GraphDef()
            with tf.gfile.GFile(model, 'rb') as fread:
                graph_Serial = fread.read()
                graphDef.ParseFromString(graph_Serial)
                tf.import_graph_def(graphDef, name='')
            self.image_tensor = self.graph.get_tensor_by_name('image_tensor:0')
            self.rect_det = self.graph.get_tensor_by_name('detection_boxes:0')
            self.prob_det = self.graph.get_tensor_by_name('detection_scores:0')
            self.class_det = self.graph.get_tensor_by_name('detection_classes:0')
            self.num_det = self.graph.get_tensor_by_name('num_detections:0')

        self.sess = tf.Session(graph=self.graph)

    def classify_image(self, img):
        # Bounding Box Detection.
        with self.graph.as_default():
            # Expand dimension since the model expects image to have shape [1, None, None, 3].
            img_expanded = np.expand_dims(img, axis=0)
            (rect, prob, classes, num) = self.sess.run( [self.rect_det, self.prob_det, self.class_det, self.num_det],
                feed_dict={self.image_tensor: img_expanded} )
        return rect, prob, classes, num

label_path = 'accidents.pbtxt'

labels = label_map_util.load_labelmap(label_path)
no_categories = label_map_util.convert_label_map_to_categories(labels, max_num_classes=1, use_display_name=True)
category_index = label_map_util.create_category_index(no_categories)

test_image = plt.imread('index.jpg')
test_image.setflags(write=1)

x = Detect_Accident()

rect, prob, classes, num = x.classify_image(test_image)

vis_util.visualize_boxes_and_labels_on_image_array(test_image, np.squeeze(rect), np.squeeze(classes).astype(np.int32), np.squeeze(prob), category_index, use_normalized_coordinates=True, line_thickness=8)

plt.imsave('test_output.jpg', test_image)

print("done")
